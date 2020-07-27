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
		End: {
            index: 3,
            label: 'Control'
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
            markup: "<g class='rotatable' stencil-type='contact'><g class='show-block'><rect class='trigger-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block'><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text'/><text class='trigger-body-content' data-toggle='modal' data-target='#ContactModal'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' magnet='true'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon.svg' port='yes'></image></g></g>",
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
            markup: "<g class='rotatable action-modal' stencil-type='email'><g class='show-block'><rect class='trigger-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block'><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-edit' xlink:href='images/editor/action/edit-icon.svg' data-tooltip='Edit'></image><line class='action-line' transform='translate(171, 18)'></line><image class='icon trigger-view' xlink:href='images/editor/action/view-icon.svg' data-tooltip='Preview'></image><line class='action-line' transform='translate(201, 18)'></line><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg' data-tooltip='Delete'></image><rect class='trigger-body-text' /><text class='trigger-body-content' data-toggle='modal' data-target='#BroadcastModal'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon.svg'></image></g></g>",
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
                    text: 'If there is any activity \non “Email Name”',
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
                },
				".trigger-edit": {
                    transform: "translate(170, 40)",
                    height: 12,
                    width: 12,
					cursor: 'pointer',
                },
				".action-line": {
					'stroke': '#7c9ae6',
					'stroke-width': 1,
					x1:20,
					y1:20,
					x2:20,
					y2:35,
					
				},
				".trigger-view": {
                    transform: "translate(200, 38)",
                    height: 14,
                    width: 14,
					cursor: 'pointer',
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
                                transform: "translate(185,38)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(181,34)",
                                xlinkHref: 'images/editor/trigger/on-send-icon.svg',
                                height: 7,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,30)",
                                fontSize: 12,
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
                                transform: "translate(196,45)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(192,41)",
                                xlinkHref: 'images/editor/trigger/on-open-icon.svg',
                                height: 7,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,37)",
                                fontSize: 12,
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
                                    'r': 9
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
                                transform: "translate(197,54)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(193,50)",
                                xlinkHref: 'images/editor/trigger/on-click-icon.svg',
                                height: 9,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,45)",
                                fontSize: 12,
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
                                transform: "translate(196,62)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(193,57)",
                                xlinkHref: 'images/editor/trigger/on-unsubscriber-icon.svg',
                                height: 8,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,53)",
                                fontSize: 12,
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
                                transform: "translate(185,68)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(181,65)",
                                xlinkHref: 'images/editor/trigger/on-bounce-icon.svg',
                                height: 6,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,61)",
                                fontSize: 12,
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
            markup: "<g class='rotatable' stencil-type='attributechange'><g class='show-block'><rect class='trigger-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block'><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text' /><text class='trigger-body-content' data-toggle='modal' data-target='#AttributeChangeModal1'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' magnet='true'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon.svg' port='yes'></image></g></g>",
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
                    text: 'If Attribute Type “Name” \nis changed by “Attribute”',
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
		{
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: "<g class='rotatable' stencil-type='segment'><g class='show-block'><rect class='trigger-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block'><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text' /><text class='trigger-body-content' data-toggle='modal' data-target='#SegmentModal1'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' magnet='true'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon.svg' port='yes'></image></g></g>",
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Segment',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".rotatable": {
                    transform: "translate(-5, 45)",
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
                    transform: "translate(21, 14)",
                    width: 27,
                    height: 32,
                    r: 10,
                    xlinkHref: 'images/editor/trigger/segment-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(2, 75)",
                    text: 'Segment'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 290,
                    height: 37,
                    r: 26,
                    fill: '#5678ce',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Segment'
                },
                ".trigger-delete": {
                    transform: "translate(292, 40)",
                    height: 12,
                    width: 12,
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 290,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'If any contact is added /removed \nfrom “Specific Segment”',
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
                    transform: "translate(14, 65)",
                    width: 26,
                    height: 25,
                    r: 26,
                    xlinkHref: 'images/editor/trigger/segment-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(262, 25)",
                    r: 15,
                    fill: "#eff3f6",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(310, 69)",
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
            markup: "<g class='rotatable' stencil-type='packagepurchase'><g class='show-block'><rect class='trigger-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block'><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text' /><text class='trigger-body-content' data-toggle='modal' data-target='#PackagePurchaseModal'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' magnet='true'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon.svg' port='yes'></image></g></g>",
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Package Purchase',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".rotatable": {
                    transform: "translate(0, 100)",
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
                    transform: "translate(20, 20)",
                    width: 24,
                    height: 22,
                    r: 10,
                    xlinkHref: 'images/editor/trigger/package-package-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(7, 75)",
                    text: ' Package \nPurchase'
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
                    text: 'Package Purchase'
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
                    text: 'If someone buy “solution \n- Package name”',
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
                    transform: "translate(15, 66)",
                    width: 22,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/trigger/package-package-drag-icon.svg',
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
            markup: "<g class='rotatable action-modal' stencil-type='Landing Page'><g class='show-block'><rect class='trigger-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block'><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-edit' xlink:href='images/editor/action/edit-icon.svg' data-tooltip='Edit'></image><line class='action-line' transform='translate(201, 18)'></line><image class='icon trigger-view' xlink:href='images/editor/action/view-icon.svg' data-tooltip='Preview'></image><line class='action-line' transform='translate(231, 18)'></line><image class='icon trigger-setting' xlink:href='images/editor/action/settings-icon.svg' data-tooltip='Setting' data-toggle='modal' data-target='#PageSettingModal'></image><line class='action-line' transform='translate(261, 18)'></line><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg' data-tooltip='Delete'></image><rect class='trigger-body-text'/><text class='trigger-body-content' data-toggle='modal' data-target='#landingpageModal'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' /><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon.svg' port='yes'></image></g></g>",
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Landing Page',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".rotatable": {
                    transform: "translate(-5, 100)",
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
                    transform: "translate(21, 14)",
                    width: 27,
                    height: 32,
                    r: 10,
                    xlinkHref: 'images/editor/trigger/landing-page-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(2, 75)",
                    text: 'Landing \n  Page'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 290,
                    height: 37,
                    r: 26,
                    fill: '#5678ce',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Landing Page'
                },
                ".trigger-delete": {
                    transform: "translate(290, 40)",
                    height: 12,
                    width: 12,
					cursor: 'pointer',
                },
				".trigger-edit": {
                    transform: "translate(200, 40)",
                    height: 12,
                    width: 12,
					cursor: 'pointer',
                },
				".trigger-setting": {
                    transform: "translate(260, 40)",
                    height: 12,
                    width: 12,
					cursor: 'pointer',
                },
				".trigger-view": {
                    transform: "translate(230, 38)",
                    height: 14,
                    width: 14,
					cursor: 'pointer',
                },
                ".trigger-body-text": {
                    transform: "translate(26, 66)",
                    width: 290,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".trigger-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'If someone perform any activity on\n Landing Page "Landing Page Title"',
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
                    transform: "translate(14, 65)",
                    width: 26,
                    height: 25,
                    r: 26,
                    xlinkHref: 'images/editor/trigger/landingpage-drag-icon.svg',
                },
                ".trigger-connect-circle": {
                    transform: "translate(262, 25)",
                    r: 15,
                    fill: "#eff3f6",
                    cx: 50,
                    cy: 50,
                    'stroke': '#ffffff',
                    'stroke-width': 2,
                },

                ".trigger-connect-icon": {
                    transform: "translate(310, 69)",
                    height: 12,
                    width: 7,
                    'pointer-events': 'none',
                },
				".action-line": {
					'stroke': '#7c9ae6',
					'stroke-width': 1,
					x1:20,
					y1:20,
					x2:20,
					y2:35,
					
				}
            },
			ports: {
                items: [
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
                                transform: "translate(258,54)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(254,50)",
                                xlinkHref: 'images/editor/trigger/conversion-yes-icon.svg',
                                height: 7,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(272,48)",
                                fontSize: 12,
                                text: 'Conversion Yes',
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
                                    'r': 9
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
                                transform: "translate(258,50)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(254,46)",
                                xlinkHref: 'images/editor/trigger/conversion-no-icon.svg',
                                height: 9,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(272,45)",
                                fontSize: 12,
                                text: 'Conversion No',
                                fill: "#7f7c88",
                            }
                        }
                    }
                ]
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
            markup: "<g class='rotatable action-modal' stencil-type='sendemail'><g class='show-block'><rect class='action-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block' magnet='passive'><rect class='trigger-paper'/><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-edit' xlink:href='images/editor/action/edit-icon.svg' data-tooltip='Edit'></image><line class='action-line' transform='translate(171, 18)'></line><image class='icon trigger-view' xlink:href='images/editor/action/view-icon.svg' data-tooltip='Preview'></image><line class='action-line' transform='translate(201, 18)'></line><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg' data-tooltip='Delete'></image><rect class='trigger-body-text' /><text class='trigger-body-content'  data-toggle='modal' data-target='#DesignSelectionModal'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon-white.svg'></image></g></g>",
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Send email',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".trigger-paper": {
                    width: 300,
                    height: 95,
					transform: "translate(1, 30)",
					fill: 'transparent',
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
                    text: 'Send an email \n“Email Name”',
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
				".trigger-edit": {
                    transform: "translate(170, 40)",
                    height: 12,
                    width: 12,
					cursor: 'pointer',
                },
				".action-line": {
					'stroke': '#5aa193',
					'stroke-width': 1,
					x1:20,
					y1:20,
					x2:20,
					y2:35,
					
				},
				".trigger-view": {
                    transform: "translate(200, 38)",
                    height: 14,
                    width: 14,
					cursor: 'pointer',
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
                                transform: "translate(185,38)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(181,34)",
                                xlinkHref: 'images/editor/action/on-send-icon.svg',
                                height: 7,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,30)",
                                fontSize: 12,
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
                                transform: "translate(196,45)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(192,41)",
                                xlinkHref: 'images/editor/action/on-open-icon.svg',
                                height: 7,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,37)",
                                fontSize: 12,
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
                                    'r': 9
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
                                transform: "translate(197,54)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(193,50)",
                                xlinkHref: 'images/editor/action/on-click-icon.svg',
                                height: 9,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,45)",
                                fontSize: 12,
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
                                transform: "translate(196,62)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(193,57)",
                                xlinkHref: 'images/editor/action/on-unsubscriber-icon.svg',
                                height: 8,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,53)",
                                fontSize: 12,
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
                                transform: "translate(185,68)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(181,65)",
                                xlinkHref: 'images/editor/action/on-bounce-icon.svg',
                                height: 6,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(208,61)",
                                fontSize: 12,
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
            markup: "<g class='rotatable action-modal' stencil-type='addtolist'><g class='show-block'><rect class='action-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block' magnet='passive'><rect class='trigger-paper'/><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text' /><text class='trigger-body-content'  data-toggle='modal' data-target='#AddToListModal1'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' magnet='true'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon-white.svg'></image></g></g>",
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
            markup: "<g class='rotatable action-modal' stencil-type='addtoquickmailinggroup'><g class='show-block'><rect class='action-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block' magnet='passive'><rect class='trigger-paper'/><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text' /><text class='trigger-body-content'  data-toggle='modal' data-target='#QuickMailingGroupModal1' /><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' magnet='true'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon-white.svg'></image></g></g>",
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
            markup: "<g class='rotatable action-modal' stencil-type='addtag'><g class='show-block'><rect class='action-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block' magnet='passive'><rect class='trigger-paper'/><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text' /><text class='trigger-body-content'  data-toggle='modal' data-target='#AddTagModal'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' magnet='true'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon-white.svg'></image></g></g>",
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
            markup: "<g class='rotatable action-modal' stencil-type='leadscore'><g class='show-block'><rect class='action-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block' magnet='passive'><rect class='trigger-paper'/><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text' /><text class='trigger-body-content'  data-toggle='modal' data-target='#LeadScoreModal'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' magnet='true'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon-white.svg'></image></g></g>",
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
		{
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: "<g class='rotatable action-modal' stencil-type='webnotification'><g class='show-block'><rect class='action-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/><text class='stencil-label1'/></g><g class='hide-block' magnet='passive'><rect class='trigger-paper'/><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text' /><text class='trigger-body-content'  data-toggle='modal' data-target='#CampaignModal'/><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle'/><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon-white.svg'></image></g></g>",
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Web notification',
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
                    transform: "translate(-5, 110)"
                },
				".contact-element-icon": {
                    transform: "translate(20, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/action/web-notification-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(20, 75)",
                    text: 'Web'
                },".stencil-label1": {
                    transform: "translate(-2, 91)",
                    text: 'notification',
					fontSize: 14,
					fontWeight: 400,
					fill: '#b3afbc',
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
                    text: 'Web notification'
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
                    text: 'Show “Web \nNotification”',
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
                    xlinkHref: 'images/editor/action/web-notification-drag-icon.svg',
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
			 ports: {
                items: [
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
                                transform: "translate(193,49)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(188,44)",
                                xlinkHref: 'images/editor/action/on-view-icon.svg',
                                height: 10,
                                width: 10,
                            },
                            portText: {
                                transform: "translate(212,42)",
                                fontSize: 12,
                                text: 'On view',
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
                                    'r': 9
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
                                transform: "translate(200,54)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(196,49)",
                                xlinkHref: 'images/editor/action/web-on-click-icon.svg',
                                height: 10,
                                width: 10,
                            },
                            portText: {
                                transform: "translate(212,48)",
                                fontSize: 12,
                                text: 'On Conversion',
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
                                transform: "translate(193,58)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(190,54)",
                                xlinkHref: 'images/editor/action/on-close-icon.svg',
                                height: 8,
                                width: 7,
                            },
                            portText: {
                                transform: "translate(212,52)",
                                fontSize: 12,
                                text: 'On close',
                                fill: "#7f7c88",
                            }
                        }
                    },
                ]
            },
        },
		{
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: "<g class='rotatable action-modal' stencil-type='showlandingpage'><g class='show-block'><rect class='action-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block' magnet='passive'><rect class='trigger-paper'/><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='trigger-body-text' /><text class='trigger-body-content'  data-toggle='modal' data-target='#landingpublishModal' /><circle class='trigger-circle'/><image class='icon trigger-icon'></image><circle class='trigger-connect-circle' /><image class='icon trigger-connect-icon' xlink:href='images/editor/next-icon-white.svg'></image></g></g>",
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Show Landing Page',
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
                    transform: "translate(0, 170)"
                },
				".contact-element-icon": {
                    transform: "translate(23, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/action/landing-page-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(-7, 75)",
                    text: ' Show Landing \n         Page',
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
                    text: 'Show Landing Page'
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
                    text: 'Redirect to the landing page\n "Landing Page Title"',
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
                    transform: "translate(15, 67)",
                    width: 26,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/action/landingpage-drag-icon.svg',
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
			ports: {
                items: [
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
                                transform: "translate(266,54)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(262,50)",
                                xlinkHref: 'images/editor/trigger/conversion-yes-icon.svg',
                                height: 7,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(280,48)",
                                fontSize: 12,
                                text: 'Conversion Yes',
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
                                    'r': 9
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
                                transform: "translate(266,50)",
                                fill: '#ffffff',
                                'stroke': '#d1d6d9',
                                'stroke-width': 1,
                                r: 9,
                            },
                            poetImage: {
                                transform: "translate(262,46)",
                                xlinkHref: 'images/editor/trigger/conversion-no-icon.svg',
                                height: 9,
                                width: 8,
                            },
                            portText: {
                                transform: "translate(280,45)",
                                fontSize: 12,
                                text: 'Conversion No',
                                fill: "#7f7c88",
                            }
                        }
                    }
                ]
            },
        },
		
    ];
	 App.config.stencil.shapes.End = [

        {
            type: 'app.RectangularModel',
            size: {
                width: 5,
                height: 3
            },
            markup: "<g class='rotatable' stencil-type='journeyend'><g class='show-block'><rect class='control-stencil'/><image class='icon contact-element-icon'></image><text class='stencil-label'/></g><g class='hide-block' magnet='passive'><rect class='trigger-paper'/><rect class='trigger-header'/><text class='trigger-header-text'/><image class='icon trigger-delete' event='element:delete' xlink:href='images/editor/delete-icon.svg'></image><rect class='control-body-text'/><text class='control-body-content'/><circle class='control-circle'/><image class='icon control-icon'></image></g></g>",
            // allowOrthogonalResize: false,

            attrs: {
                root: {
                    dataTooltip: 'Journey End',
                    dataTooltipPosition: 'left',
                    dataTooltipPositionSelector: '.joint-stencil'
                },
                ".control-stencil": {
                    transform: "translate(0, 0)",
                    width: 65,
                    height: 60,
                    rx: 5,
                    ry: 5,
                },
				".trigger-paper": {
				 width: 255,
				 height: 95, 
				 transform: "translate(1, 30)",
				 fill:'transparent'
				},
                ".contact-element-icon": {
                    transform: "translate(20, 21)",
                    width: 26,
                    height: 20,
                    r: 10,
                    xlinkHref: 'images/editor/control/journey-end-icon.svg',
                },
                ".stencil-label": {
                    transform: "translate(-10, 75)",
                    text: 'Journey End'
                },
                ".trigger-header": {
                    transform: "translate(26, 30)",
                    width: 228,
                    height: 37,
                    r: 26,
                    fill: '#f6635f',
                    rx: 5,
                    ry: 5
                },
                ".trigger-header-text": {
                    transform: "translate(70, 40)",
                    fill: '#fff',
                    text: 'Journey End'
                },
                ".trigger-delete": {
                    transform: "translate(230, 40)",
                    height: 12,
                    width: 12,
                },
                ".control-body-text": {
                    transform: "translate(26, 66)",
                    width: 228,
                    height: 60,
                    r: 26,
                    fill: '#fff',
                    rx: 5,
                    ry: 5
                },
                ".control-body-content": {
                    transform: "translate(70,80)",
                    fill: '#748089',
                    text: 'End of Customer \nJourney',
					fontSize: 14,
                },
                ".control-circle": {
                    transform: "translate(-24, 27)",
                    r: 27,
                    fill: "#fff",
                    cx: 50,
                    cy: 50,
                    'stroke': '#f5f5f5',
                    'stroke-width': 1
                },
                ".control-icon": {
                    transform: "translate(14, 67)",
                    width: 26,
                    height: 20,
                    r: 26,
                    xlinkHref: 'images/editor/control/journey-end-drag-icon.svg',
                },
                

            },
        },
];

})();