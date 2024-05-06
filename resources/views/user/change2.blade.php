@extends('components.layout')
@section('body_class', 'the-change2')

@section('header')
    <x-header :dark=$darkThemeFlag />
@endsection

@section('content')
<section class="story-section gallery-wrapper">
    <div class="gallery-container">
        <div class="options">
            <div class="option active" style="background:#400C00; opacity: 0.8;">
                <div class="image active-image" style="background-image:url('../images/backgrounds/agri.jpeg');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Agriculture</div>
                        
                        </div>
                    </div>

                </div>
                <div class="description">
                    <div class="image-content scroll text-white">Changes in temperature and precipitation patterns impact agricultural productivity. Shifts in growing seasons, increased pest and disease pressure, and water availability affect crop yields and food security. Farming communities across Bhutan, especially those dependent on rain-fed agriculture, are vulnerable to these changes.</div>
                </div>
            </div>

            <div class="option" style="background:#400C00; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/water.png');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Water Resources</div>
                           
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white"> Changes in rainfall patterns and increased evaporation rates affect water availability. This can lead to water scarcity in certain regions, impacting hydropower generation, irrigation for agriculture, and access to clean drinking water. Communities relying on these resources, particularly those in water-stressed areas, face challenges.</div>
                </div>
            </div>

            <div class="option" style="background:#400C00; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/glacier.jpeg');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Glacial lake outburst floods (GLOFs) </div>
                            
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">Glacier retreat in Bhutan increases the risk of GLOFs. Communities living downstream of glacial lakes are at risk of sudden and devastating floods. These communities, often located in mountainous regions, need to be prepared for such events and have early warning systems in place.</div>
                </div>
            </div>

            <div class="option" style="background:#400C00; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/biodiv.jpeg');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Biodiversity and Ecosystems</div>
                        
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">
                    Changes in temperature and precipitation patterns can disrupt ecosystems and impact biodiversity. Species may face habitat loss or reduced suitability, affecting both plant and animal communities. Protected areas and communities dependent on forest resources for their livelihoods are particularly affected.
  
                    </div>
                </div>
            </div>

            <div class="option" style="background:#400C00; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/struc.jpeg');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Infrastructure and Settlements</div>
                           
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">Extreme weather events, such as floods and landslides, pose risks to infrastructure and settlements. Roads, bridges, and buildings are vulnerable to damage, affecting transportation, communication, and access to services. Communities living in vulnerable areas are at higher risk.</div>
                </div>
            </div>

            <div class="option" style="background:#400C00; opacity: 0.8;">
                <div class="image" style="background-image: url('../images/backgrounds/tourism.jpeg');">
                    <div class="label">
                        <div class="info">
                            <div class="main">Tourism</div>
                            
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="image-content scroll text-white">
                    Bhutan's tourism sector, which heavily relies on its natural beauty and cultural heritage, can be impacted by climate change. Changes in landscapes, biodiversity, and weather patterns can affect the attractiveness and accessibility of tourist destinations, potentially impacting local economies.
                    </div>
                </div>
            </div>
 
        </div>

    </div>

    <h1 class="text-white">the CHANGE</h1>
</section>
@endsection

@section('footer')
<footer class="footer">
    <x-story-control :links="$links" :next-link="$nextLink" :dark=$darkThemeFlag/>
</footer>
@endsection

@section('nav')
    <x-story-nav :dark=$darkThemeFlag />
    <x-circular_nav :background="$cnavBg" :inner-border="$cnavInnerBorder"/>
@endsection