var telInput = $("#phone"),
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");

// initialise plugin
telInput.intlTelInput({

   // automatically format the number according to the selected country
        autoFormat: true,
        // if there is just a dial code in the input: remove it on blur, and re-add it on focus
        autoHideDialCode: true,
        // default country
        defaultCountry: "",
        // token for ipinfo - required for https or over 1000 daily page views support
        ipinfoToken: "",
        // don't insert international dial codes
        nationalMode: false,
        // number type to use for placeholders
        numberType: "MOBILE",
        // display only these countries
        onlyCountries: ['XK','AL','MK','MC','SI'],
        // the countries at the top of the list. defaults to united states and united kingdom
        preferredCountries: [ "us", "gb" ],
        // stop the user from typing invalid numbers
        preventInvalidNumbers: false,
        // stop the user from typing invalid dial codes
        preventInvalidDialCodes: false,
        // specify the path to the libphonenumber script to enable validation/formatting
        utilsScript:"",
        initialCountry: "XK",
});

var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};

// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
      /* get code here*/
      var getCode = telInput.intlTelInput('getSelectedCountryData').dialCode;
      alert(getCode);
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);