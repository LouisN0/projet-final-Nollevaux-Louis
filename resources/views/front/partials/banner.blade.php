<div id="boxed-slider">
    <div class="slider container">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>
                    @foreach ($banners as $banner )
                    <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                        <img src="{{ asset("/images/". $banner->image) }}" data-fullwidthcentering="on" alt="slide">
                        <div class="tp-caption first-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="160" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?= str_replace(["<br>"], ["<br>"], $banner->titre) ?></div>
                        <div class="tp-caption solution-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="225" data-speed="2000" data-start="200" data-easing="Power4.easeIn" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?= str_replace(["<br>"], ["<br>"], $banner->motsCle) ?></div>
                        <div class="tp-caption second-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="310" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><p><?= str_replace(["<br>"], ["<br>"], $banner->description) ?></p></div>
                        <div class="tp-caption third-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="400" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><div class="slider-button"><a href="{{ $banner->btn }}">Buy now</a></div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>