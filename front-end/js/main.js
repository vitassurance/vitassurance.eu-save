/* global alert */
;(function ($, window, document, undefined) {
    'use strict';

    $('#rating-1').rating();

    $('#example-default').rating();

    $('#example-messages').rating({
      messages: [
        'Please rate us',
        '1 star message',
        '2 stars message',
        '3 stars message',
        '4 stars message',
        '5 stars message'
      ]
    });

    $('#example-show-label').rating({
        showLabel: false
    });

    $('#example-inline').rating({
        showLabel: false,
        inline: true
    });

    $('#example-color').rating({
        color: '#D96E7B',
        colorHover: '#CF4656'
    });
    
    $('#example-size').rating({
        size: '30px'
    });

    $('#example-icon').rating({
        icon: 'fa-tint'
    });

    $('#example-get-value').rating({
        inline: true,
        showLabel: false
    });

    $('#btn-example-get-value').click(function () {
        var val = $('#example-get-value').rating('val');
        alert(val);
    });

    $('#example-on-change').rating({}).change(function () {
        alert('Value changed! Now it is ' + $(this).rating('val'));
    });

    $('#example-validation').rating({
        inline: true,
        showLabel: false,
        validationMessage: 'Oops! Please rate us!'
    });
}(jQuery, window, document));
