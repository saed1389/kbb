"use strict";
const formAuthentication = document.querySelector("#formAuthentication");
document.addEventListener("DOMContentLoaded", function (e) {
    var t;
    formAuthentication && FormValidation.formValidation(formAuthentication, {
        fields: {
            username: {
                validators: {
                    notEmpty: {message: "Lütfen e-posta giriniz"},
                    stringLength: {min: 6, message: "Kullanıcı adı 6 karakterden uzun olmalıdır"}
                }
            },
            email: {
                validators: {
                    notEmpty: {message: "Lütfen geçerli bir e-posta adresi girin..."},
                    emailAddress: {message: "Lütfen geçerli bir e-posta adresi girin"}
                }
            },
            "email-username": {
                validators: {
                    notEmpty: {message: "Please enter email / username"},
                    stringLength: {min: 6, message: "Kullanıcı adı 6 karakterden uzun olmalıdır"}
                }
            },
            password: {
                validators: {
                    notEmpty: {message: "Şifrenizi giriniz Lütfen"},
                    stringLength: {min: 6, message: "Şifre 6 karakterden fazla olmalı"}
                }
            },
            "confirm-password": {
                validators: {
                    notEmpty: {message: "Please confirm password"},
                    identical: {
                        compare: function () {
                            return formAuthentication.querySelector('[name="password"]').value
                        }, message: "Şifre ve onayı aynı değil"
                    },
                    stringLength: {min: 6, message: "Şifre 6 karakterden fazla olmalı"}
                }
            },
            terms: {validators: {notEmpty: {message: "Lütfen şartlar ve koşulları kabul edin"}}}
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger,
            bootstrap5: new FormValidation.plugins.Bootstrap5({eleValidClass: "", rowSelector: ".mb-3"}),
            submitButton: new FormValidation.plugins.SubmitButton,
            defaultSubmit: new FormValidation.plugins.DefaultSubmit,
            autoFocus: new FormValidation.plugins.AutoFocus
        },
        init: e => {
            e.on("plugins.message.placed", function (e) {
                e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
            })
        }
    }), (t = document.querySelectorAll(".numeral-mask")).length && t.forEach(e => {
        new Cleave(e, {numeral: !0})
    })
});
