/**
 *  Form Wizard
 */

'use strict';

(function () {
    // Init custom option check
    window.Helpers.initCustomOptionCheck();

    const flatpickrRange = document.querySelector('.flatpickr'),
        phoneMask = document.querySelector('.contact-number-mask'),
        plCountry = $('#plCountry'),
        plFurnishingDetailsSuggestionEl = document.querySelector('#plFurnishingDetails');

    // Phone Number Input Mask
    if (phoneMask) {
        new Cleave(phoneMask, {
            phone: true,
            phoneRegionCode: 'US'
        });
    }

    // select2 (Country)

    if (plCountry) {
        plCountry.wrap('<div class="position-relative"></div>');
        plCountry.select2({
            placeholder: 'Select Country',
            dropdownParent: plCountry.parent()
        });
    }

    if (flatpickrRange) {
        flatpickrRange.flatpickr();
    }

    // Tagify (Furnishing details)
    const furnishingList = [
        'Fridge',
        'TV',
        'AC',
        'WiFi',
        'RO',
        'Washing Machine',
        'Sofa',
        'Bed',
        'Dining Table',
        'Microwave',
        'Cupboard'
    ];
    if (plFurnishingDetailsSuggestionEl) {
        const plFurnishingDetailsSuggestion = new Tagify(plFurnishingDetailsSuggestionEl, {
            whitelist: furnishingList,
            maxTags: 10,
            dropdown: {
                maxItems: 20,
                classname: 'tags-inline',
                enabled: 0,
                closeOnSelect: false
            }
        });
    }

    // Vertical Wizard
    // --------------------------------------------------------------------

    const wizardPropertyListing = document.querySelector('#wizard-property-listing');
    if (typeof wizardPropertyListing !== undefined && wizardPropertyListing !== null) {
        // Wizard form
        const wizardPropertyListingForm = wizardPropertyListing.querySelector('#wizard-property-listing-form');
        // Wizard steps
        const wizardPropertyListingFormStep1 = wizardPropertyListingForm.querySelector('#personal-details');
        const wizardPropertyListingFormStep2 = wizardPropertyListingForm.querySelector('#time-zone');
        const wizardPropertyListingFormStep3 = wizardPropertyListingForm.querySelector('#property-details');
        const wizardPropertyListingFormStep4 = wizardPropertyListingForm.querySelector('#property-features');
        const wizardPropertyListingFormStep5 = wizardPropertyListingForm.querySelector('#property-area');
        const wizardPropertyListingFormStep6 = wizardPropertyListingForm.querySelector('#price-details');
        // Wizard next prev button
        const wizardPropertyListingNext = [].slice.call(wizardPropertyListingForm.querySelectorAll('.btn-next'));
        const wizardPropertyListingPrev = [].slice.call(wizardPropertyListingForm.querySelectorAll('.btn-prev'));

        const validationStepper = new Stepper(wizardPropertyListing, {
            linear: true
        });
        window.validationStepper = validationStepper;

        // Personal Details
        const FormValidation1 = FormValidation.formValidation(wizardPropertyListingFormStep1, {
            fields: {
                // * Validate the fields here based on your requirements
                plFirstName: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your first name'
                        }
                    }
                },
                plLastName: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your last name'
                        }
                    }
                }
            },

            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    // Use this for enabling/changing valid/invalid class
                    // eleInvalidClass: '',
                    eleValidClass: '',
                    rowSelector: '.col-sm-6'
                }),
                autoFocus: new FormValidation.plugins.AutoFocus(),
                submitButton: new FormValidation.plugins.SubmitButton()
            },
            init: instance => {
                instance.on('plugins.message.placed', function (e) {
                    //* Move the error message out of the `input-group` element
                    if (e.element.parentElement.classList.contains('input-group')) {
                        e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
                    }
                });
            }
        }).on('core.form.valid', function () {
            // Jump to the next step when all fields in the current step are valid
            validationStepper.next();
        });
        // Personal Details
        const FormValidation2 = FormValidation.formValidation(wizardPropertyListingFormStep1, {
            fields: {
                // * Validate the fields here based on your requirements
                // plFirstName: {
                //     validators: {
                //         notEmpty: {
                //             message: 'Please enter your first name'
                //         }
                //     }
                // },
                // plLastName: {
                //     validators: {
                //         notEmpty: {
                //             message: 'Please enter your last name'
                //         }
                //     }
                // }
            },

            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    // Use this for enabling/changing valid/invalid class
                    // eleInvalidClass: '',
                    eleValidClass: '',
                    rowSelector: '.col-sm-6'
                }),
                autoFocus: new FormValidation.plugins.AutoFocus(),
                submitButton: new FormValidation.plugins.SubmitButton()
            },
            init: instance => {
                instance.on('plugins.message.placed', function (e) {
                    //* Move the error message out of the `input-group` element
                    if (e.element.parentElement.classList.contains('input-group')) {
                        e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
                    }
                });
            }
        }).on('core.form.valid', function () {
            // Jump to the next step when all fields in the current step are valid
            validationStepper.next();
        });

        // Property Details
        const FormValidation3 = FormValidation.formValidation(wizardPropertyListingFormStep3, {
            fields: {
                // * Validate the fields here based on your requirements

                plPropertyType: {
                    validators: {
                        notEmpty: {
                            message: 'Please select service type'
                        }
                    }
                },
                plZipCode: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter zip code'
                        },
                        stringLength: {
                            min: 4,
                            max: 10,
                            message: 'The zip code must be more than 4 and less than 10 characters long'
                        }
                    }
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    // Use this for enabling/changing valid/invalid class
                    // eleInvalidClass: '',
                    eleValidClass: '',
                    rowSelector: function (field, ele) {
                        // field is the field name & ele is the field element
                        switch (field) {
                            case 'plAddress':
                                return '.col-lg-12';
                            default:
                                return '.col-sm-6';
                        }
                    }
                }),
                autoFocus: new FormValidation.plugins.AutoFocus(),
                submitButton: new FormValidation.plugins.SubmitButton()
            }
        }).on('core.form.valid', function () {
            // Jump to the next step when all fields in the current step are valid
            validationStepper.next();
        });

        // select2 (Property type)
        const plPropertyType = $('#plPropertyType');
        if (plPropertyType.length) {
            plPropertyType.wrap('<div class="position-relative"></div>');
            plPropertyType
                .select2({
                    placeholder: 'Select Service type',
                    dropdownParent: plPropertyType.parent()
                })
                .on('change', function () {
                    // Revalidate the color field when an option is chosen
                    FormValidation2.revalidateField('plPropertyType');
                });
        }

        // Property Features
        const FormValidation4 = FormValidation.formValidation(wizardPropertyListingFormStep4, {
            fields: {
                plFirstName: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your first name'
                        }
                    }
                },
                plLastName: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your last name'
                        }
                    }
                },
                plEmail: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your email'
                        }
                    }
                },
                plContact: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your contact'
                        }
                    }
                },
                plPropertyType: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your service type'
                        }
                    }
                },
                plZipCode: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your zip'
                        }
                    }
                },
                plCountry: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your country'
                        }
                    }
                },
                plState: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your state'
                        }
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    // Use this for enabling/changing valid/invalid class
                    // eleInvalidClass: '',
                    eleValidClass: '',
                    rowSelector: '.col-sm-6'
                }),
                autoFocus: new FormValidation.plugins.AutoFocus(),
                submitButton: new FormValidation.plugins.SubmitButton()
            }
        }).on('core.form.valid', function () {
            validationStepper.next();
        });

        // Property Area
        const FormValidation5 = FormValidation.formValidation(wizardPropertyListingFormStep5, {
            fields: {
                plAddress: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter your Address'
                        }
                    }
                },
                // * Validate the fields here based on your requirements
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    // Use this for enabling/changing valid/invalid class
                    // eleInvalidClass: '',
                    eleValidClass: '',
                    rowSelector: '.col-md-12'
                }),
                autoFocus: new FormValidation.plugins.AutoFocus(),
                submitButton: new FormValidation.plugins.SubmitButton()
            }
        }).on('core.form.valid', function () {
            // Jump to the next step when all fields in the current step are valid
            validationStepper.next();
        });

        // Price Details
        const FormValidation6 = FormValidation.formValidation(wizardPropertyListingFormStep6, {
            fields: {
                // * Validate the fields here based on your requirements
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    // Use this for enabling/changing valid/invalid class
                    // eleInvalidClass: '',
                    eleValidClass: '',
                    rowSelector: '.col-md-12'
                }),
                autoFocus: new FormValidation.plugins.AutoFocus(),
                submitButton: new FormValidation.plugins.SubmitButton()
            }
        }).on('core.form.valid', function () {
            // You can submit the form
            // wizardPropertyListingForm.submit()
            // or send the form data to server via an Ajax request
            // To make the demo simple, I just placed an alert
            alert('Submitted..!!');
        });

        wizardPropertyListingNext.forEach(item => {
            item.addEventListener('click', event => {
                // When click the Next button, we will validate the current step
                console.log(validationStepper._currentIndex);
                switch (validationStepper._currentIndex) {

                    case 0:
                        FormValidation1.validate();
                        break;
                    case 1:
                        FormValidation2.validate();
                        break;
                    case 2:
                        FormValidation3.validate();
                        break;

                    case 3:
                        FormValidation4.validate();
                        break;

                    case 4:
                        FormValidation5.validate();
                        break;

                    case 5:
                        FormValidation6.validate();
                        break;

                    default:
                        break;
                }
            });
        });

        wizardPropertyListingPrev.forEach(item => {
            item.addEventListener('click', event => {
                switch (validationStepper._currentIndex) {
                    case 5:
                        validationStepper.previous();
                        break;
                    case 4:
                        validationStepper.previous();
                        break;

                    case 3:
                        validationStepper.previous();
                        break;

                    case 2:
                        validationStepper.previous();
                        break;

                    case 1:
                        validationStepper.previous();
                        break;

                    case 0:

                    default:
                        break;
                }
            });
        });
    }
})();
