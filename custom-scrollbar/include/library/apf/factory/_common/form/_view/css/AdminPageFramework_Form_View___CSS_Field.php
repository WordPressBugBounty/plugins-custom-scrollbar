<?php 
/**
	Admin Page Framework v3.8.30b03 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/custom-scrollbar>
	Copyright (c) 2013-2021, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class CustomScrollbar_AdminPageFramework_Form_View___CSS_Field extends CustomScrollbar_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->___getFormFieldRules();
    }
    static private function ___getFormFieldRules() {
        return "td.custom-scrollbar-field-td-no-title {padding-left: 0;padding-right: 0;}.custom-scrollbar-fields {display: table; width: 100%;table-layout: fixed;}.custom-scrollbar-field input[type='number'] {text-align: right;} .custom-scrollbar-fields .disabled,.custom-scrollbar-fields .disabled input,.custom-scrollbar-fields .disabled textarea,.custom-scrollbar-fields .disabled select,.custom-scrollbar-fields .disabled option {color: #BBB;}.custom-scrollbar-fields hr {border: 0; height: 0;border-top: 1px solid #dfdfdf; }.custom-scrollbar-fields .delimiter {display: inline;}.custom-scrollbar-fields-description {margin-bottom: 0;}.custom-scrollbar-field {float: left;clear: both;display: inline-block;margin: 1px 0;}.custom-scrollbar-field label {display: inline-block; width: 100%;}@media screen and (max-width: 782px) {.form-table fieldset > label {display: inline-block;}}.custom-scrollbar-field .custom-scrollbar-input-label-container {margin-bottom: 0.25em;}@media only screen and ( max-width: 780px ) { .custom-scrollbar-field .custom-scrollbar-input-label-container {margin-top: 0.5em; margin-bottom: 0.5em;}} .custom-scrollbar-field .custom-scrollbar-input-label-string {padding-right: 1em; vertical-align: middle; display: inline-block; }.custom-scrollbar-field .custom-scrollbar-input-button-container {padding-right: 1em; }.custom-scrollbar-field .custom-scrollbar-input-container {display: inline-block;vertical-align: middle;}.custom-scrollbar-field-image .custom-scrollbar-input-label-container { vertical-align: middle;}.custom-scrollbar-field .custom-scrollbar-input-label-container {display: inline-block; vertical-align: middle; } .repeatable .custom-scrollbar-field {clear: both;display: block;}.custom-scrollbar-repeatable-field-buttons {float: right; margin: 0.1em 0 0.5em 0.3em;vertical-align: middle;}.custom-scrollbar-repeatable-field-buttons .repeatable-field-button {margin: 0 0.1em;font-weight: normal;vertical-align: middle;text-align: center;}@media only screen and (max-width: 960px) {.custom-scrollbar-repeatable-field-buttons {margin-top: 0;}}.custom-scrollbar-sections.sortable-section > .custom-scrollbar-section,.sortable > .custom-scrollbar-field {clear: both;float: left;display: inline-block;padding: 1em 1.32em 1em;margin: 1px 0 0 0;border-top-width: 1px;border-bottom-width: 1px;border-bottom-style: solid;-webkit-user-select: none;-moz-user-select: none;user-select: none; text-shadow: #fff 0 1px 0;-webkit-box-shadow: 0 1px 0 #fff;box-shadow: 0 1px 0 #fff;-webkit-box-shadow: inset 0 1px 0 #fff;box-shadow: inset 0 1px 0 #fff;-webkit-border-radius: 3px;border-radius: 3px;background: #f1f1f1;background-image: -webkit-gradient(linear, left bottom, left top, from(#ececec), to(#f9f9f9));background-image: -webkit-linear-gradient(bottom, #ececec, #f9f9f9);background-image: -moz-linear-gradient(bottom, #ececec, #f9f9f9);background-image: -o-linear-gradient(bottom, #ececec, #f9f9f9);background-image: linear-gradient(to top, #ececec, #f9f9f9);border: 1px solid #CCC;background: #F6F6F6;} .custom-scrollbar-fields.sortable {margin-bottom: 1.2em; } .custom-scrollbar-field .button.button-small {width: auto;} .font-lighter {font-weight: lighter;} .custom-scrollbar-field .button.button-small.dashicons {font-size: 1.2em;padding-left: 0.2em;padding-right: 0.22em;min-width: 1em; }@media screen and (max-width: 782px) {.custom-scrollbar-field .button.button-small.dashicons {min-width: 1.8em; }}.custom-scrollbar-field .button.button-small.dashicons:before {position: relative;top: 7.2%;}@media screen and (max-width: 782px) {.custom-scrollbar-field .button.button-small.dashicons:before {top: 8.2%;}}.custom-scrollbar-field-title {font-weight: 600;min-width: 80px;margin-right: 1em;}.custom-scrollbar-fieldset {font-weight: normal;}.custom-scrollbar-input-label-container,.custom-scrollbar-input-label-string{min-width: 140px;}";
    }
    protected function _getVersionSpecific() {
        $_sCSSRules = '';
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            $_sCSSRules.= ".custom-scrollbar-field .remove_value.button.button-small {line-height: 1.5em; }";
        }
        $_sCSSRules.= $this->___getForWP38OrAbove();
        $_sCSSRules.= $this->___getForWP53OrAbove();
        return $_sCSSRules;
    }
    private function ___getForWP38OrAbove() {
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            return '';
        }
        return ".custom-scrollbar-repeatable-field-buttons {margin: 2px 0 0 0.3em;}.custom-scrollbar-repeatable-field-buttons.disabled > .repeatable-field-button {color: #edd;border-color: #edd;} @media screen and ( max-width: 782px ) {.custom-scrollbar-fieldset {overflow-x: hidden;overflow-y: hidden;}}";
    }
    private function ___getForWP53OrAbove() {
        if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
            return '';
        }
        return ".custom-scrollbar-field .button.button-small.dashicons:before {position: relative;top: -5.4px;}@media screen and (max-width: 782px) {.custom-scrollbar-field .button.button-small.dashicons:before {top: -6.2%;}.custom-scrollbar-field .button.button-small.dashicons {min-width: 2.4em;}}.custom-scrollbar-repeatable-field-buttons .repeatable-field-button.button.button-small {min-width: 2.4em;padding: 0;}.repeatable-field-button .dashicons {position: relative;top: 4.4px;font-size: 16px;}@media screen and (max-width: 782px) {.custom-scrollbar-repeatable-field-buttons {margin: 0.5em 0 0 0.28em;}.repeatable-field-button .dashicons {position: relative;top: 10px;font-size: 18px;}.custom-scrollbar-repeatable-field-buttons .repeatable-field-button.button.button-small {margin-top: 0;margin-bottom: 0;min-width: 2.6em;min-height: 2.4em;}.custom-scrollbar-fields.sortable .custom-scrollbar-repeatable-field-buttons {margin: 0;}}";
    }
    }
    