<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Cubo extends \Elementor\Widget_Base { 
    // our widget code geos here
    public function get_name() {
        return 'cubo';
    }

    public function get_title() {
        return esc_html__( 'Cubo 3D', 'cubo' );
    }

    public function get_icon() {
        return 'eicon-header';
    }

    public function get_custom_help_url() {
        return 'https://essentialwebapps.com/category/elementor-tutorial/';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    public function get_keywords() {
        return [ 'cubo', 'cube', 'card'];
    }

    protected function register_controls() { 
        // our control function code goes here.
        $this->start_controls_section(
            'content_section',
            [
            'label' => esc_html__( 'Content', 'cube' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'cube-face-1',
            [
            'label' => esc_html__( 'Cube face 1', 'cube' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
            'placeholder' => esc_html__( 'Your cube title here', 'cube' ),
            ]
        );
        $this->add_control(
            'cube-face-2',
            [
            'label' => esc_html__( 'Cube face 2', 'cube' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
            'placeholder' => esc_html__( 'Your cube title here', 'cube' ),
            ]
        );
        $this->add_control(
            'cube-face-3',
            [
            'label' => esc_html__( 'Cube face 3', 'cube' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
            'placeholder' => esc_html__( 'Your cube title here', 'cube' ),
            ]
        );
        $this->add_control(
            'cube-face-4',
            [
            'label' => esc_html__( 'Cube face 4', 'cube' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
            'placeholder' => esc_html__( 'Your cube title here', 'cube' ),
            ]
        );
        $this->add_control(
            'cube-face-5',
            [
            'label' => esc_html__( 'Cube face 5', 'cube' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
            'placeholder' => esc_html__( 'Your cube title here', 'cube' ),
            ]
        );
        $this->add_control(
            'cube-face-6',
            [
            'label' => esc_html__( 'Cube face 6', 'cube' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
            'placeholder' => esc_html__( 'Your cube title here', 'cube' ),
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {

        // get our input from the widget settings.
        $settings = $this->get_settings_for_display();
	
        // get the individual values of the input
        $cf1 = $settings['cube-face-1'];
        $cf2 = $settings['cube-face-2'];
        $cf3 = $settings['cube-face-3'];
        $cf4 = $settings['cube-face-4'];
        $cf5 = $settings['cube-face-5'];
        $cf6 = $settings['cube-face-6'];
        
        //Código del cubo tomado de https://codepen.io/jordizle/pen/bGReWV
        ?>
            <style>
                *, *:before, *:after {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box; }

                body {
                background: #484848;
                font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
                font-weight: 300; }

                #wrapper {
                    padding-top: 10%;
                    padding-bottom: 20%;
                }

                .viewport {
                -webkit-perspective: 800px;
                -moz-perspective: 800px;
                -ms-perspective: 800px;
                -o-perspective: 800px;
                perspective: 800px;
                -webkit-perspective-origin: 50% 300px;
                -moz-perspective-origin: 50% 300px;
                -ms-perspective-origin: 50% 300px;
                -o-perspective-origin: 50% 300px;
                perspective-origin: 50% 300px;
                -webkit-transform: scale(0.8, 0.8);
                -moz-transform: scale(0.8, 0.8);
                -ms-transform: scale(0.8, 0.8);
                -o-transform: scale(0.8, 0.8);
                transform: scale(0.8, 0.8);
                -webkit-box-reflect: below 170px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(0%, transparent), to(rgba(250, 250, 250, 0.3))); }

                .cube {
                position: relative;
                margin: 0 auto;
                height: 300px;
                width: 300px;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transform: rotateX(136deg) rotateY(1122deg);
                -moz-transform: rotateX(136deg) rotateY(1122deg);
                -ms-transform: rotateX(136deg) rotateY(1122deg);
                -o-transform: rotateX(136deg) rotateY(1122deg);
                transform: rotateX(136deg) rotateY(1122deg); }

                .cube > div {
                overflow: hidden;
                position: absolute;
                opacity: 0.9;
                height: 300px;
                width: 300px;
                background-image: url("https://e7.pngegg.com/pngimages/388/261/png-clipart-desktop-music-space-texture-atmosphere.png");
                -webkit-touch-callout: none;
                -moz-touch-callout: none;
                -ms-touch-callout: none;
                -o-touch-callout: none;
                touch-callout: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                -o-user-select: none;
                user-select: none; }

                .cube > div > div.cube-image {
                width: 300px;
                height: 300px;
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                -o-transform: rotate(180deg);
                transform: rotate(180deg);
                line-height: 300px;
                font-size: 20px;
                text-align: center;
                color: #1b9bd8;
                -webkit-transition: color 600ms;
                -moz-transition: color 600ms;
                -ms-transition: color 600ms;
                -o-transition: color 600ms;
                transition: color 600ms; }
                .cube > div > div.cube-image.active {
                    color: white; }

                .cube > div:hover {
                cursor: pointer; }

                .cube > div:active {
                cursor: pointer; }

                .cube > div:first-child {
                -webkit-transform: rotateX(90deg) translateZ(150px);
                -moz-transform: rotateX(90deg) translateZ(150px);
                -ms-transform: rotateX(90deg) translateZ(150px);
                -o-transform: rotateX(90deg) translateZ(150px);
                transform: rotateX(90deg) translateZ(150px);
                outline: 1px solid transparent; }

                .cube > div:nth-child(2) {
                -webkit-transform: translateZ(150px);
                -moz-transform: translateZ(150px);
                -ms-transform: translateZ(150px);
                -o-transform: translateZ(150px);
                transform: translateZ(150px);
                outline: 1px solid transparent; }

                .cube > div:nth-child(3) {
                -webkit-transform: rotateY(90deg) translateZ(150px);
                -moz-transform: rotateY(90deg) translateZ(150px);
                -ms-transform: rotateY(90deg) translateZ(150px);
                -o-transform: rotateY(90deg) translateZ(150px);
                transform: rotateY(90deg) translateZ(150px);
                outline: 1px solid transparent; }

                .cube > div:nth-child(4) {
                -webkit-transform: rotateY(180deg) translateZ(150px);
                -moz-transform: rotateY(180deg) translateZ(150px);
                -ms-transform: rotateY(180deg) translateZ(150px);
                -o-transform: rotateY(180deg) translateZ(150px);
                transform: rotateY(180deg) translateZ(150px);
                outline: 1px solid transparent; }

                .cube > div:nth-child(5) {
                -webkit-transform: rotateY(-90deg) translateZ(150px);
                -moz-transform: rotateY(-90deg) translateZ(150px);
                -ms-transform: rotateY(-90deg) translateZ(150px);
                -o-transform: rotateY(-90deg) translateZ(150px);
                transform: rotateY(-90deg) translateZ(150px);
                outline: 1px solid transparent; }

                .cube > div:nth-child(6) {
                -webkit-transform: rotateX(-90deg) rotate(180deg) translateZ(150px);
                -moz-transform: rotateX(-90deg) rotate(180deg) translateZ(150px);
                -ms-transform: rotateX(-90deg) rotate(180deg) translateZ(150px);
                -o-transform: rotateX(-90deg) rotate(180deg) translateZ(150px);
                transform: rotateX(-90deg) rotate(180deg) translateZ(150px);
                outline: 1px solid transparent; }

                object {
                opacity: 0.5; }

                object:hover {
                opacity: 1; }

                @media (max-width: 840px) {
                .viewport {
                    -webkit-transform: scale(0.6, 0.6);
                    -moz-transform: scale(0.6, 0.6);
                    -ms-transform: scale(0.6, 0.6);
                    -o-transform: scale(0.6, 0.6);
                    transform: scale(0.6, 0.6); } }

            </style>
            <!-- Start rendering the output -->
            <div id="wrapper">
                <div class="viewport">
                    <div class="cube">
                    <div class="side">
                        <div class="cube-image"><?php echo $cf1;  ?></div>
                    </div>
                    <div class="side">
                        <div class="cube-image"><?php echo $cf2;  ?></div>
                    </div>
                    <div class="side">
                        <div class="cube-image"><?php echo $cf3;  ?></div>
                    </div>
                    <div class="side">
                        <div class="cube-image"><?php echo $cf4;  ?></div>
                    </div>
                    <div class="side">
                        <div class="cube-image"><?php echo $cf5;  ?></div>
                    </div>
                    <div class="side">
                        <div class="cube-image active"><?php echo $cf6;  ?></div>
                    </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                var events = new Events();
                events.add = function(obj) {
                obj.events = { };
                }
                events.implement = function(fn) {
                fn.prototype = Object.create(Events.prototype);
                }

                function Events() {
                this.events = { };
                }
                Events.prototype.on = function(name, fn) {
                var events = this.events[name];
                if (events == undefined) {
                    this.events[name] = [ fn ];
                    this.emit('event:on', fn);
                } else {
                    if (events.indexOf(fn) == -1) {
                    events.push(fn);
                    this.emit('event:on', fn);
                    }
                }
                return this;
                }
                Events.prototype.once = function(name, fn) {
                var events = this.events[name];
                fn.once = true;
                if (!events) {
                    this.events[name] = [ fn ];
                    this.emit('event:once', fn);
                } else {
                    if (events.indexOf(fn) == -1) {
                    events.push(fn);
                    this.emit('event:once', fn);
                    }
                }
                return this;
                }
                Events.prototype.emit = function(name, args) {
                var events = this.events[name];
                if (events) {
                    var i = events.length;
                    while(i--) {
                    if (events[i]) {
                        events[i].call(this, args);
                        if (events[i].once) {
                        delete events[i];
                        }
                    }
                    }
                }
                return this;
                }
                Events.prototype.unbind = function(name, fn) {
                if (name) {
                    var events = this.events[name];
                    if (events) {
                    if (fn) {
                        var i = events.indexOf(fn);
                        if (i != -1) {
                        delete events[i];
                        }
                    } else {
                        delete this.events[name];
                    }
                    }
                } else {
                    delete this.events;
                    this.events = { };
                }
                return this;
                }

                var userPrefix;

                var prefix = (function () {
                var styles = window.getComputedStyle(document.documentElement, ''),
                    pre = (Array.prototype.slice
                    .call(styles)
                    .join('') 
                    .match(/-(moz|webkit|ms)-/) || (styles.OLink === '' && ['', 'o'])
                    )[1],
                    dom = ('WebKit|Moz|MS|O').match(new RegExp('(' + pre + ')', 'i'))[1];
                userPrefix = {
                    dom: dom,
                    lowercase: pre,
                    css: '-' + pre + '-',
                    js: pre[0].toUpperCase() + pre.substr(1)
                };
                })();

                function bindEvent(element, type, handler) {
                if(element.addEventListener) {
                    element.addEventListener(type, handler, false);
                } else {
                    element.attachEvent('on' + type, handler);
                }
                }

                function Viewport(data) {
                events.add(this);

                var self = this;

                this.element = data.element;
                this.fps = data.fps;
                this.sensivity = data.sensivity;
                this.sensivityFade = data.sensivityFade;
                this.touchSensivity = data.touchSensivity;
                this.speed = data.speed;

                this.lastX = 0;
                this.lastY = 0;
                this.mouseX = 0;
                this.mouseY = 0;
                this.distanceX = 0;
                this.distanceY = 0;
                this.positionX = 1122;
                this.positionY = 136;
                this.torqueX = 0;
                this.torqueY = 0;

                this.down = false;
                this.upsideDown = false;

                this.previousPositionX = 0;
                this.previousPositionY = 0;

                this.currentSide = 0;
                this.calculatedSide = 0;


                bindEvent(document, 'mousedown', function() {
                    self.down = true;
                });

                bindEvent(document, 'mouseup', function() {
                    self.down = false;
                });
                
                bindEvent(document, 'keyup', function() {
                    self.down = false;
                });

                bindEvent(document, 'mousemove', function(e) {
                    self.mouseX = e.pageX;
                    self.mouseY = e.pageY;
                });

                bindEvent(document, 'touchstart', function(e) {

                    self.down = true;
                    e.touches ? e = e.touches[0] : null;
                    self.mouseX = e.pageX / self.touchSensivity;
                    self.mouseY = e.pageY / self.touchSensivity;
                    self.lastX  = self.mouseX;
                    self.lastY  = self.mouseY;
                });

                bindEvent(document, 'touchmove', function(e) {
                    if(e.preventDefault) { 
                    e.preventDefault();
                    }

                    if(e.touches.length == 1) {

                    e.touches ? e = e.touches[0] : null;

                    self.mouseX = e.pageX / self.touchSensivity;
                    self.mouseY = e.pageY / self.touchSensivity;

                    }
                });

                bindEvent(document, 'touchend', function(e) {
                    self.down = false;
                });  

                setInterval(this.animate.bind(this), this.fps);

                }
                events.implement(Viewport);
                Viewport.prototype.animate = function() {

                this.distanceX = (this.mouseX - this.lastX);
                this.distanceY = (this.mouseY - this.lastY);

                this.lastX = this.mouseX;
                this.lastY = this.mouseY;

                if(this.down) {
                    this.torqueX = this.torqueX * this.sensivityFade + (this.distanceX * this.speed - this.torqueX) * this.sensivity;
                    this.torqueY = this.torqueY * this.sensivityFade + (this.distanceY * this.speed - this.torqueY) * this.sensivity;
                }

                if(Math.abs(this.torqueX) > 1.0 || Math.abs(this.torqueY) > 1.0) {
                    if(!this.down) {
                    this.torqueX *= this.sensivityFade;
                    this.torqueY *= this.sensivityFade;
                    }

                    this.positionY -= this.torqueY;

                    if(this.positionY > 360) {
                    this.positionY -= 360;
                    } else if(this.positionY < 0) {
                    this.positionY += 360;
                    }

                    if(this.positionY > 90 && this.positionY < 270) {
                    this.positionX -= this.torqueX;

                    if(!this.upsideDown) {
                        this.upsideDown = true;
                        this.emit('upsideDown', { upsideDown: this.upsideDown });
                    }

                    } else {

                    this.positionX += this.torqueX;

                    if(this.upsideDown) {
                        this.upsideDown = false;
                        this.emit('upsideDown', { upsideDown: this.upsideDown });
                    }
                    }

                    if(this.positionX > 360) {
                    this.positionX -= 360;
                    } else if(this.positionX < 0) {
                    this.positionX += 360;
                    }

                    if(!(this.positionY >= 46 && this.positionY <= 130) && !(this.positionY >= 220 && this.positionY <= 308)) {
                    if(this.upsideDown) {
                        if(this.positionX >= 42 && this.positionX <= 130) {
                        this.calculatedSide = 3;
                        } else if(this.positionX >= 131 && this.positionX <= 223) {
                        this.calculatedSide = 2;
                        } else if(this.positionX >= 224 && this.positionX <= 314) {
                        this.calculatedSide = 5;
                        } else {
                        this.calculatedSide = 4;
                        }
                    } else {
                        if(this.positionX >= 42 && this.positionX <= 130) {
                        this.calculatedSide = 5;
                        } else if(this.positionX >= 131 && this.positionX <= 223) {
                        this.calculatedSide = 4;
                        } else if(this.positionX >= 224 && this.positionX <= 314) {
                        this.calculatedSide = 3;
                        } else {
                        this.calculatedSide = 2;
                        }
                    }
                    } else {
                    if(this.positionY >= 46 && this.positionY <= 130) {
                        this.calculatedSide = 6;
                    }

                    if(this.positionY >= 220 && this.positionY <= 308) {
                        this.calculatedSide = 1;
                    }
                    }

                    if(this.calculatedSide !== this.currentSide) {
                    this.currentSide = this.calculatedSide;
                    this.emit('sideChange');
                    }

                }

                this.element.style[userPrefix.js + 'Transform'] = 'rotateX(' + this.positionY + 'deg) rotateY(' + this.positionX + 'deg)';

                if(this.positionY != this.previousPositionY || this.positionX != this.previousPositionX) {
                    this.previousPositionY = this.positionY;
                    this.previousPositionX = this.positionX;

                    this.emit('rotate');

                }

                }
                var viewport = new Viewport({
                    element: document.getElementsByClassName('cube')[0],
                    fps: 20,
                    sensivity: .1,
                    sensivityFade: .93,
                    speed: 2,
                    touchSensivity: 1.5
                });

                function Cube(data) {
                    var self = this;

                    this.element = data.element;
                    this.sides = this.element.getElementsByClassName('side');

                    this.viewport = data.viewport;
                    this.viewport.on('rotate', function() {
                        self.rotateSides();
                    });
                    this.viewport.on('upsideDown', function(obj) {
                        self.upsideDown(obj);
                    });
                    this.viewport.on('sideChange', function() {
                        self.sideChange();
                    });
                }
                Cube.prototype.rotateSides = function() {
                var viewport = this.viewport;
                if(viewport.positionY > 90 && viewport.positionY < 270) {
                    this.sides[0].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + (viewport.positionX + viewport.torqueX) + 'deg)';
                    this.sides[5].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + -(viewport.positionX + 180 + viewport.torqueX) + 'deg)';
                } else {
                    this.sides[0].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + (viewport.positionX - viewport.torqueX) + 'deg)';
                    this.sides[5].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + -(viewport.positionX + 180 - viewport.torqueX) + 'deg)';
                }
                }
                Cube.prototype.upsideDown = function(obj) {

                var deg = (obj.upsideDown == true) ? '180deg' : '0deg';
                var i = 5;

                while(i > 0 && --i) {
                    this.sides[i].getElementsByClassName('cube-image')[0].style[userPrefix.js + 'Transform'] = 'rotate(' + deg + ')';
                }

                }
                Cube.prototype.sideChange = function() {

                for(var i = 0; i < this.sides.length; ++i) {
                    this.sides[i].getElementsByClassName('cube-image')[0].className = 'cube-image';    
                }

                this.sides[this.viewport.currentSide - 1].getElementsByClassName('cube-image')[0].className = 'cube-image active';

                }

                new Cube({
                viewport: viewport,
                element: document.getElementsByClassName('cube')[0]
                });
            </script>
            <!-- End rendering the output -->

        <?php

    }
}