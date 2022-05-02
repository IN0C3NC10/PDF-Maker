$(document).ready(function() {
    
    "use strict";
    
    var $validator = $("#wizardForm").validate({
        rules: {
            firstName: {
                required: true
            },
            lastName: {
                required: true
		    },
		    email: {
                required: true,
                email: true
		    },
		    personalProfile: {
                required: true
		    },
		    companyName: {
                required: true
		    },
		    companyStartDate: {
                required: true
            },
		    companyEndDate: {
                required: true
		    }
        }
    });
 
    $('#rootwizard').bootstrapWizard({
        'tabClass': 'nav nav-tabs',
        onTabShow: function(tab, navigation, index) {
            var $total = (navigation.find('li').length) - 1;
            var $current = index;
            var $percent = ($current/$total) * 100;
            $('#rootwizard').find('.progress-bar').css({width:$percent+'%'});
            if ($percent == 100){
                $('#rootwizard').find('.progress-bar').css({background:'#208c09'});
            } else {
                $('#rootwizard').find('.progress-bar').css({background:'#5bc0de'});
            }
        },
        'onNext': function(tab, navigation, index) {
            var $valid = $("#wizardForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },
        'onTabClick': function(tab, navigation, index) {
            var $valid = $("#wizardForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },
    });
});