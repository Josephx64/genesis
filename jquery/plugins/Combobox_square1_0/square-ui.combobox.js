/*
  TODO
      1. Create a combobox from a select element
      2. Show/Hide of list
      3. Selected item functionality
      4. Destroy method
      5. Value Method
      6. Text Method
      7. **BONUS** Autocomplete
*/

jQuery.expr[':'].icontains = function(a, i, m) {
  return jQuery(a).text().toUpperCase()
      .indexOf(m[3].toUpperCase()) >= 0;
};


// the widget definition, where "custom" is the namespace,
// "colorize" the widget name
$.widget( "squareui.combobox", {
  // default options
  options: {
    //buttonText: 'Go',
    buttonText: '',
    isOpen: false,

    // callbacks
    change: null
  },

  // the constructor
  _create: function() {

    // get the select element
    var $select = this.element;

    // hide select element
    $select.hide(); //DESCOMENTAR ESTA LINEA**************************************

    // create the combobox
    var combobox = this._createComboBox();
    this.combobox = $( combobox );

    // cache commonly used elements
    this._cacheElements();

    // bind UI actions
    this._bindUIActions();


    // append the created combobox to the page
    $select.after( this.combobox )

    this._refresh();
  },

  // called when created, and later when changing options
  _refresh: function() {

  },

  // events bound via _on are removed automatically
  // revert other modifications here
  _destroy: function() {
    this.combobox.remove();
    this.element.show();
  },

  _createLi: function( val, text ) {
    return '\t<li data-value="' + val + '">' + '<span data-value="' + val + '">' + text + '</span>' + '</li>\n';
  },
  _createLis: function( options ) {
    var self = this, lis = [];
    $.each( options, function( key, option ) {
      var $option = $( option ),
        li = self._createLi( $option.val(), $option.text() );
      lis.push( li );
    });
    return lis.join('');
  },

  _createComboBox: function() {

    var $select = this.element,
        opts = this.options,
        combobox = '';

    combobox += '<div class="combobox">\n';
    combobox += '\t<input type="text" placeholder="-Seleccione una opci&oacute;n-" value="" class="txtbox" />\n';
    combobox += '\t<a class="txtbox-btn">' + opts.buttonText;
	 combobox += '\t<img src="img/bltFlecha_Abajo.png">' + '</a>\n';
    combobox += '</div>\n';
    combobox += '<ul class="combobox-options">\n';
    // loop through select element and grab options 
    // and make them lis

    combobox += this._createLis( $select.children( 'option' ) );

    combobox += '</ul>\n';

    return combobox;
  },

  _openClose: function() {
    this.cached['.combobox-options'].slideToggle();
  },

  _selectLi: function( e ) {
    var $selectedLi = $( e.target ),
        selectedValue = $selectedLi.data( 'value' );

    this.cached['.txtbox'].val( selectedValue );
    this._openClose();

    this.element.val( selectedValue );

    this._trigger( "change" );
  },

  _autocomplete: function() {
    var term = this.cached['.txtbox'].val(),
        $results = null;

    if (term !== '') {
      $results = this.cached['.combobox-options li'].find( 'span:icontains(' + term + ')' );
    }
    if ($results) {
      this.cached['.combobox-options'].show();
      this.cached['.combobox-options li'].show();
      this.cached['.combobox-options li'].children().show();

      var $spans = this.cached['.combobox-options li'].children().not( $results );
      $spans.parent().hide();
      $spans.hide();
    } else {
      this.cached['.combobox-options'].hide();
      this.cached['.combobox-options li'].show();
      this.cached['.combobox-options li'].children().show();
    }
  },

  _bindUIActions: function() {
    // initial show/hide
    this.cached['.combobox-options'].hide();
    if (this.options.isOpen) {
      this.cached['.combobox-options'].show();
    }

    // show/hide
    this._on(this.cached['.txtbox-btn'], {
      click: '_openClose'
    });
    
    // item select
    this._on( this.cached['.combobox-options li'], {
      click: '_selectLi'
    });

    //autocomplete
    this._on( this.cached['.txtbox'], {
      keyup: '_autocomplete'
    })
  },

  val: function() {
    return this.element.children(":selected").val();
  },

  text: function() {
    return this.element.children(":selected").text();
  },

  // _setOptions is called with a hash of all options that are changing
  // always refresh when changing options
  _setOptions: function() {
    // _super and _superApply handle keeping the right this-context
    this._superApply( arguments );
    this._refresh();
  },

  // _setOption is called for each individual option that is changing
  _setOption: function( key, value ) {
    
    this._super( key, value );
  },

  _cacheElements: function() {
    var $combobox = this.combobox,
        $txtboxBtn = $combobox.find('.txtbox-btn'),
        $txtbox = $combobox.find('.txtbox'),
        $options = $combobox.siblings('.combobox-options'),
        $lis = $options.children()

    this.cached = {
      ".txtbox-btn": $txtboxBtn,
      ".combobox-options": $options,
      ".combobox-options li": $lis,
      ".txtbox": $txtbox
    };  
  }
});