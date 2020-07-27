/*! Rappid v2.4.0 - HTML5 Diagramming Framework - TRIAL VERSION
Copyright (c) 2015 client IO
 2019-07-05 
This Source Code Form is subject to the terms of the Rappid Trial License
, v. 2.0. If a copy of the Rappid License was not distributed with this
file, You can obtain one at http://jointjs.com/license/rappid_v2.txt
 or from the Rappid archive as was distributed by client IO. See the LICENSE file.*/
var App = App || {};
App.config = App.config || {};

(function() {

    'use strict';

    App.config.stencil = {};

    App.config.stencil.groups = {
        standard: {
            index: 1,
            label: 'Triggers'
        },
        fsa: {
            index: 2,
            label: 'Action'
        },
    };

    App.config.stencil.shapes = {};

    App.config.stencil.shapes.standard = [

        {
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: '<g class="rotatable"><g class="show-block"><rect class="trigger-stencil"/><image class="icon contact-element-icon"></image><text class="stencil-label"/></g><g class="hide-block"><rect class="trigger-header"/><text class="trigger-header-text"/><image class="icon trigger-delete" event="element:delete" xlink:href="images/editor/delete-icon.svg"></image><rect class="trigger-body-text" /><text class="trigger-body-content" data-toggle="modal" data-target="#ContactModal"/><circle class="trigger-circle"/><image class="icon trigger-icon"></image><circle class="trigger-connect-circle" magnet="true"/><image class="icon trigger-connect-icon" xlink:href="images/editor/next-icon.svg" port="yes"></image></g></g>',
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Contact',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".trigger-stencil": {
                    transform: "translate(0, 0)",
                    width: 65,
                    height: 60,
                    rx: 5,
                    ry: 5,
                },
                ".contact-element-icon": {
                    transform: "translate(20, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/trigger/contact-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(8, 75)",
                    text: 'Contact'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 228,
                    height: 37,
                    r: 26,
                    fill: '#5678ce',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Contact'
                },
                ".trigger-delete": {
                    transform: "translate(230, 40)",
                    height: 12,
                    width: 12,
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 228,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'If any contact is added \nin to a “Specific List”',
                },
                ".trigger-circle": {
                    transform: "translate(-24, 27)",
                    r: 27,
                    fill: "#fff",
                    cx: 50,
                    cy: 50,
                    'stroke': '#f5f5f5',
                    'stroke-width': 1
                },
                ".trigger-icon": {
                    transform: "translate(14, 67)",
                    width: 26,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/trigger/contact-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(202, 25)",
                    r: 15,
                    fill: "#eff3f6",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(250, 69)",
                    height: 12,
                    width: 7,
                    'pointer-events': 'none',
                }

            },
        },

        {
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: '<g class="rotatable"><g class="show-block"><rect class="trigger-stencil"/><image class="icon contact-element-icon"></image><text class="stencil-label"/></g><g class="hide-block"><rect class="trigger-header"/><text class="trigger-header-text"/><image class="icon trigger-delete" event="element:delete" xlink:href="images/editor/delete-icon.svg"></image><rect class="trigger-body-text" /><text class="trigger-body-content" data-toggle="modal" data-target="#AddNewBroadcastModal"/><circle class="trigger-circle"/><image class="icon trigger-icon"></image><circle class="trigger-connect-circle" magnet="true"/><image class="icon trigger-connect-icon" xlink:href="images/editor/next-icon.svg" port="yes"></image></g></g>',
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Email',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".rotatable": {
                    transform: "translate(-5, 0)",
                    width: 65,
                    height: 60,
                    rx: 5,
                    ry: 5,
                },
				".trigger-stencil": {
                    transform: "translate(0, 0)",
                    width: 65,
                    height: 60,
                    rx: 5,
                    ry: 5,
                },
                ".contact-element-icon": {
                    transform: "translate(20, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/trigger/email-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(12, 75)",
                    text: 'Email'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 228,
                    height: 37,
                    r: 26,
                    fill: '#5678ce',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Email'
                },
                ".trigger-delete": {
                    transform: "translate(230, 40)",
                    height: 12,
                    width: 12,
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 228,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'If there is any activity \non “Email Subject”',
                },
                ".trigger-circle": {
                    transform: "translate(-24, 27)",
                    r: 27,
                    fill: "#fff",
                    cx: 50,
                    cy: 50,
                    'stroke': '#f5f5f5',
                    'stroke-width': 1
                },
                ".trigger-icon": {
                    transform: "translate(14, 67)",
                    width: 26,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/trigger/email-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(202, 25)",
                    r: 15,
                    fill: "#eff3f6",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(250, 69)",
                    height: 12,
                    width: 7,
                    'pointer-events': 'none',
                }

            },
        },

		 {
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: '<g class="rotatable"><g class="show-block"><rect class="trigger-stencil"/><image class="icon contact-element-icon"></image><text class="stencil-label"/></g><g class="hide-block"><rect class="trigger-header"/><text class="trigger-header-text"/><image class="icon trigger-delete" event="element:delete" xlink:href="images/editor/delete-icon.svg"></image><rect class="trigger-body-text" /><text class="trigger-body-content" data-toggle="modal" data-target="#AttributeChangeModal1"/><circle class="trigger-circle"/><image class="icon trigger-icon"></image><circle class="trigger-connect-circle" magnet="true"/><image class="icon trigger-connect-icon" xlink:href="images/editor/next-icon.svg" port="yes"></image></g></g>',
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Attribute changes',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".rotatable": {
                    transform: "translate(0, 45)",
                    width: 65,
                    height: 60,
                    rx: 5,
                    ry: 5,
                },
				".trigger-stencil": {
                    transform: "translate(0, 0)",
                    width: 65,
                    height: 60,
                    rx: 5,
                    ry: 5,
                },
                ".contact-element-icon": {
                    transform: "translate(15, 15)",
                    width: 38,
                    height: 36,
                    r: 10,
                    xlinkHref: 'images/editor/trigger/attibute-changes-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(7, 75)",
                    text: 'Attribute \nchanges'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 228,
                    height: 37,
                    r: 26,
                    fill: '#5678ce',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Attribute changes'
                },
                ".trigger-delete": {
                    transform: "translate(230, 40)",
                    height: 12,
                    width: 12,
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 228,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'If “Attribute Type” is \nchanged by “Attribute””',
                },
                ".trigger-circle": {
                    transform: "translate(-24, 27)",
                    r: 27,
                    fill: "#fff",
                    cx: 50,
                    cy: 50,
                    'stroke': '#f5f5f5',
                    'stroke-width': 1
                },
                ".trigger-icon": {
                    transform: "translate(12, 64)",
                    width: 28,
                    height: 28,
                    r: 26,
                    xlinkHref: 'images/editor/trigger/attibute-changes-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(202, 25)",
                    r: 15,
                    fill: "#eff3f6",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(250, 69)",
                    height: 12,
                    width: 7,
                    'pointer-events': 'none',
                }

            },
        },

    ];

    App.config.stencil.shapes.fsa = [
			{
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: '<g class="rotatable action-modal"><g class="show-block"><rect class="action-stencil"/><image class="icon contact-element-icon"></image><text class="stencil-label"/></g><g class="hide-block" magnet="passive"><rect class="trigger-paper"/><rect class="trigger-header"/><text class="trigger-header-text"/><image class="icon trigger-delete" event="element:delete" xlink:href="images/editor/delete-icon.svg"></image><rect class="trigger-body-text" /><text class="trigger-body-content"  data-toggle="modal" data-target="#DesignSelectionModal"/><circle class="trigger-circle"/><image class="icon trigger-icon"></image><circle class="trigger-connect-circle"/><image class="icon trigger-connect-icon" xlink:href="images/editor/next-icon-white.svg"></image><g class="connection-path"><path class="connection-path1 dotted-stroke"/><path class="connection-path2 dotted-stroke"/><path class="connection-path3 dotted-stroke"/><path class="connection-path4 dotted-stroke"/><path class="connection-path5 dotted-stroke"/><path class="connection-path6 dotted-stroke"/></g></g></g>',
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Send email',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".trigger-paper": {
                    width: 255,
                    height: 95,
					transform: "translate(1, 30)",
					fill: 'none',
                },
				".action-stencil": {
                    width: 65,
                    height: 60,
                    r: 26,
                    fill: '#161121',
                    rx: 5,
                    ry: 5,
                },
                ".contact-element-icon": {
                    transform: "translate(20, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/action/send-email-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(-1, 75)",
                    text: 'Send email'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 228,
                    height: 37,
                    r: 26,
                    fill: '#318a78',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Send email'
                },
                ".trigger-delete": {
                    transform: "translate(230, 40)",
                    height: 12,
                    width: 12,
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 228,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'Send an email \n“Email Subject”',
                },
                ".trigger-circle": {
                    transform: "translate(-24, 27)",
                    r: 27,
                    fill: "#fff",
                    cx: 50,
                    cy: 50,
                    'stroke': '#f5f5f5',
                    'stroke-width': 1
                },
                ".trigger-icon": {
                    transform: "translate(14, 67)",
                    width: 26,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/action/send-email-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(202, 25)",
                    r: 15,
                    fill: "#318a78",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(250, 69)",
                    height: 12,
                    width: 7,
                    'pointer-events': 'none',
                },
                ".connection-path1": {
                    'd': 'M 270 75 L 280 75 L 280 175 L 300 175'
                },
                ".connection-path2": {
                    'd': 'M 280 -23 L 280 70'
                },
                ".connection-path3": {
                    'd': 'M 280 -23 l 25 0'
                },
                ".connection-path4": {
                    'd': 'M 280 25 l 25 0'
                },
                ".connection-path5": {
                    'd': 'M 280 75 l 25 0'
                },
                ".connection-path6": {
                    'd': 'M 280 125 l 25 0'
                },
                ".dotted-stroke": {
                    'fill': 'none',
                    'stroke': '#7f7c88',
                    'stroke-width': 1,
                    'pointer-events': 'none'
                },

            },
            ports: {
                items: [{
                        group: 'out',
                        markup: [{
                                tagName: 'circle',
                                selector: 'portBody',
                                attributes: {
                                    'r': 10
                                }
                            },
                            {
                                tagName: 'image',
                                selector: 'poetImage',
                            },
                            {
                                tagName: 'text',
                                selector: 'portText',
                            }
                        ],
                        attrs: {
                            portBody: {
                                transform: "translate(230,-30)",
                                fill: '#ffffff',
                                'stroke': '#ccc',
                                'stroke-width': 1,
                                r: 15,
                            },
                            poetImage: {
                                transform: "translate(224,-36)",
                                xlinkHref: 'images/editor/action/on-send-icon.svg',
                                height: 12,
                                width: 14,
                            },
                            portText: {
                                transform: "translate(260,-35)",
                                fontSize: 14,
                                text: 'On send',
                                fill: "#7f7c88",
                            }
                        }
                    },
                    {
                        group: 'out',
                        markup: [{
                                tagName: 'circle',
                                selector: 'portBody',
                                attributes: {
                                    'r': 10
                                }
                            },
                            {
                                tagName: 'image',
                                selector: 'poetImage',
                            },
                            {
                                tagName: 'text',
                                selector: 'portText',
                            }
                        ],
                        attrs: {
                            portBody: {
                                transform: "translate(230,10)",
                                fill: '#ffffff',
                                'stroke': '#ccc',
                                'stroke-width': 1,
                                r: 15,
                            },
                            poetImage: {
                                transform: "translate(223,3)",
                                xlinkHref: 'images/editor/action/on-open-icon.svg',
                                height: 13,
                                width: 14,
                            },
                            portText: {
                                transform: "translate(260,5)",
                                fontSize: 14,
                                text: 'On open',
                                fill: "#7f7c88",
                            }
                        }
                    },
                    {
                        group: 'out',
                        markup: [{
                                tagName: 'circle',
                                selector: 'portBody',
                                attributes: {
                                    'r': 10
                                }
                            },
                            {
                                tagName: 'image',
                                selector: 'poetImage',
                            },
                            {
                                tagName: 'text',
                                selector: 'portText',
                            }
                        ],
                        attrs: {
                            portBody: {
                                transform: "translate(230,50)",
                                fill: '#ffffff',
                                'stroke': '#ccc',
                                'stroke-width': 1,
                                r: 15,
                            },
                            poetImage: {
                                transform: "translate(223,44)",
                                xlinkHref: 'images/editor/action/on-click-icon.svg',
                                height: 15,
                                width: 14,
                            },
                            portText: {
                                transform: "translate(260,45)",
                                fontSize: 14,
                                text: 'On click',
                                fill: "#7f7c88",
                            }
                        }
                    },
                    {
                        group: 'out',
                        markup: [{
                                tagName: 'circle',
                                selector: 'portBody',
                                attributes: {
                                    'r': 10
                                }
                            },
                            {
                                tagName: 'image',
                                selector: 'poetImage',
                            },
                            {
                                tagName: 'text',
                                selector: 'portText',
                            }
                        ],
                        attrs: {
                            portBody: {
                                transform: "translate(230,90)",
                                fill: '#ffffff',
                                'stroke': '#ccc',
                                'stroke-width': 1,
                                r: 15,
                            },
                            poetImage: {
                                transform: "translate(224,83)",
                                xlinkHref: 'images/editor/action/on-unsubscriber-icon.svg',
                                height: 14,
                                width: 14,
                            },
                            portText: {
                                transform: "translate(260,85)",
                                fontSize: 14,
                                text: 'On unsubscribe',
                                fill: "#7f7c88",
                            }
                        }
                    },
                    {
                        group: 'out',
                        markup: [{
                                tagName: 'circle',
                                selector: 'portBody',
                                attributes: {
                                    'r': 10
                                }
                            },
                            {
                                tagName: 'image',
                                selector: 'poetImage',
                            },
                            {
                                tagName: 'text',
                                selector: 'portText',
                            }

                        ],
                        attrs: {
                            portBody: {
                                transform: "translate(230,130)",
                                fill: '#ffffff',
                                'stroke': '#ccc',
                                'stroke-width': 1,
                                r: 15,
                            },
                            poetImage: {
                                transform: "translate(223,125)",
                                xlinkHref: 'images/editor/action/on-bounce-icon.svg',
                                height: 10,
                                width: 14,
                            },
                            portText: {
                                transform: "translate(260,125)",
                                fontSize: 14,
                                text: 'On bounce',
                                fill: "#7f7c88",
                            }
                        }
                    }
                ]
            },
        },
		{
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: '<g class="rotatable action-modal"><g class="show-block"><rect class="action-stencil"/><image class="icon contact-element-icon"></image><text class="stencil-label"/></g><g class="hide-block" magnet="passive"><rect class="trigger-paper"/><rect class="trigger-header"/><text class="trigger-header-text"/><image class="icon trigger-delete" event="element:delete" xlink:href="images/editor/delete-icon.svg"></image><rect class="trigger-body-text" /><text class="trigger-body-content"  data-toggle="modal" data-target="#AddToListModal1"/><circle class="trigger-circle"/><image class="icon trigger-icon"></image><circle class="trigger-connect-circle" magnet="true"/><image class="icon trigger-connect-icon" xlink:href="images/editor/next-icon-white.svg"></image></g></g>',
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Add to list',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
				".trigger-paper": {
                    width: 255,
                    height: 95,
					transform: "translate(1, 30)",
					fill: 'none',
                },
                ".action-stencil": {
                    width: 65,
                    height: 60,
                    r: 26,
                    fill: '#161121',
                    rx: 5,
                    ry: 5,
                },
                ".rotatable": {
                    transform: "translate(-5, 0)"
                },
				".contact-element-icon": {
                    transform: "translate(20, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/action/add-to-list-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(-1, 75)",
                    text: 'Add to list'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 228,
                    height: 37,
                    r: 26,
                    fill: '#318a78',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Add to list'
                },
                ".trigger-delete": {
                    transform: "translate(230, 40)",
                    height: 12,
                    width: 12,
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 228,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'If any contact is added \nin to a “Specific List”',
                },
                ".trigger-circle": {
                    transform: "translate(-24, 27)",
                    r: 27,
                    fill: "#fff",
                    cx: 50,
                    cy: 50,
                    'stroke': '#f5f5f5',
                    'stroke-width': 1
                },
                ".trigger-icon": {
                    transform: "translate(14, 67)",
                    width: 26,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/action/add-to-list-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(202, 25)",
                    r: 15,
                    fill: "#318a78",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(250, 69)",
                    height: 12,
                    width: 7,
                    'pointer-events': 'none',
                },
            },
        },
		{
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: '<g class="rotatable action-modal"><g class="show-block"><rect class="action-stencil"/><image class="icon contact-element-icon"></image><text class="stencil-label"/></g><g class="hide-block" magnet="passive"><rect class="trigger-paper"/><rect class="trigger-header"/><text class="trigger-header-text"/><image class="icon trigger-delete" event="element:delete" xlink:href="images/editor/delete-icon.svg"></image><rect class="trigger-body-text" /><text class="trigger-body-content"  data-toggle="modal" data-target="#QuickMailingGroupModal1" /><circle class="trigger-circle"/><image class="icon trigger-icon"></image><circle class="trigger-connect-circle" magnet="true"/><image class="icon trigger-connect-icon" xlink:href="images/editor/next-icon-white.svg"></image></g></g>',
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Add to quick mailing group',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".action-stencil": {
                    width: 65,
                    height: 60,
                    r: 26,
                    fill: '#161121',
                    rx: 5,
                    ry: 5,
                },
				".trigger-paper": {
                    width: 330,
                    height: 95,
					transform: "translate(1, 30)",
					fill: 'none',
                },
                ".rotatable": {
                    transform: "translate(0, 45)"
                },
				".contact-element-icon": {
                    transform: "translate(17, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/action/add-to-quick-mailing-group-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(-7, 75)",
                    text: ' Add to quick \nmailing group',
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 300,
                    height: 37,
                    r: 26,
                    fill: '#318a78',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Add to quick mailing group'
                },
                ".trigger-delete": {
                    transform: "translate(302, 40)",
                    height: 12,
                    width: 12,
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 300,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'Add contacts in to a “Specific Quick \nMailing Group”',
                },
                ".trigger-circle": {
                    transform: "translate(-24, 27)",
                    r: 27,
                    fill: "#fff",
                    cx: 50,
                    cy: 50,
                    'stroke': '#f5f5f5',
                    'stroke-width': 1
                },
                ".trigger-icon": {
                    transform: "translate(10, 67)",
                    width: 26,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/action/add-to-quick-mailing-group-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(270, 25)",
                    r: 15,
                    fill: "#318a78",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(317, 69)",
                    height: 12,
                    width: 7,
                    'pointer-events': 'none',
                },
            },
        },
		{
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: '<g class="rotatable action-modal"><g class="show-block"><rect class="action-stencil"/><image class="icon contact-element-icon"></image><text class="stencil-label"/></g><g class="hide-block" magnet="passive"><rect class="trigger-paper"/><rect class="trigger-header"/><text class="trigger-header-text"/><image class="icon trigger-delete" event="element:delete" xlink:href="images/editor/delete-icon.svg"></image><rect class="trigger-body-text" /><text class="trigger-body-content"  data-toggle="modal" data-target="#AddTagModal"/><circle class="trigger-circle"/><image class="icon trigger-icon"></image><circle class="trigger-connect-circle" magnet="true"/><image class="icon trigger-connect-icon" xlink:href="images/editor/next-icon-white.svg"></image></g></g>',
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Add tag',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".action-stencil": {
                    width: 65,
                    height: 60,
                    r: 26,
                    fill: '#161121',
                    rx: 5,
                    ry: 5,
                },
				".trigger-paper": {
                    width: 255,
                    height: 95,
					transform: "translate(1, 30)",
					fill: 'none',
                },
                ".rotatable": {
                    transform: "translate(-5, 45)"
                },
				".contact-element-icon": {
                    transform: "translate(20, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/action/add-tag-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(6, 75)",
                    text: 'Add tag'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 228,
                    height: 37,
                    r: 26,
                    fill: '#318a78',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Add tag'
                },
                ".trigger-delete": {
                    transform: "translate(230, 40)",
                    height: 12,
                    width: 12,
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 228,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'Add “Tag” tag to the \ncontacts',
                },
                ".trigger-circle": {
                    transform: "translate(-24, 27)",
                    r: 27,
                    fill: "#fff",
                    cx: 50,
                    cy: 50,
                    'stroke': '#f5f5f5',
                    'stroke-width': 1
                },
                ".trigger-icon": {
                    transform: "translate(14, 67)",
                    width: 26,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/action/add-tag-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(202, 25)",
                    r: 15,
                    fill: "#318a78",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(250, 69)",
                    height: 12,
                    width: 7,
                    'pointer-events': 'none',
                },
            },
        },
		{
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: '<g class="rotatable action-modal"><g class="show-block"><rect class="action-stencil"/><image class="icon contact-element-icon"></image><text class="stencil-label"/></g><g class="hide-block" magnet="passive"><rect class="trigger-paper"/><rect class="trigger-header"/><text class="trigger-header-text"/><image class="icon trigger-delete" event="element:delete" xlink:href="images/editor/delete-icon.svg"></image><rect class="trigger-body-text" /><text class="trigger-body-content"  data-toggle="modal" data-target="#LeadScoreModal"/><circle class="trigger-circle"/><image class="icon trigger-icon"></image><circle class="trigger-connect-circle" magnet="true"/><image class="icon trigger-connect-icon" xlink:href="images/editor/next-icon-white.svg"></image></g></g>',
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Lead score',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".action-stencil": {
                    width: 65,
                    height: 60,
                    r: 26,
                    fill: '#161121',
                    rx: 5,
                    ry: 5,
                },
				".trigger-paper": {
                    width: 255,
                    height: 95,
					transform: "translate(1, 30)",
					fill: 'none',
                },
                ".rotatable": {
                    transform: "translate(0,110)"
                },
				".contact-element-icon": {
                    transform: "translate(20, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/action/lead-score-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(0, 75)",
                    text: 'Lead score'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 228,
                    height: 37,
                    r: 26,
                    fill: '#318a78',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Lead score'
                },
                ".trigger-delete": {
                    transform: "translate(230, 40)",
                    height: 12,
                    width: 12,
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 228,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'Add/remove “Lead Score” \nto specific contacts',
                },
                ".trigger-circle": {
                    transform: "translate(-24, 27)",
                    r: 27,
                    fill: "#fff",
                    cx: 50,
                    cy: 50,
                    'stroke': '#f5f5f5',
                    'stroke-width': 1
                },
                ".trigger-icon": {
                    transform: "translate(14, 67)",
                    width: 26,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/action/lead-score-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(202, 25)",
                    r: 15,
                    fill: "#318a78",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(250, 69)",
                    height: 12,
                    width: 7,
                    'pointer-events': 'none',
                },
            },
        },
    ];

})();