<!DOCTYPE html>
<html>
    <h1 style="text-align:center; color:white;"> Live Infographics </h1><br>
<div class="container">
    <div class="row" style="background-color:white; padding:25px; opacity:0.9; border-radius:10px;">
    
    
<div class="col-lg-6">    
    <div class="panel panel-default" style="padding:25px;">
        <div class="panel-heading" style="opacity:0.7;">
            <h2 class="animated bounceInDown"> Number of Farmers Against Buyers </h2>
        </div>
    <br>
    <canvas id="farmers_Buyers"> </canvas>
    </div>
</div>


<div class="col-lg-6">    
    <div class="panel panel-default" style="padding:25px;">
        <div class="panel-heading" style="opacity:0.7;">
            <h2 class="animated bounceInDown"> Top 5 Highest Grossing Vegetables [KG] </h2>
        </div>
    <br>
    <canvas id="popularVeg" > </canvas>
    </div>
</div>

<div class="col-lg-6">    
    <div class="panel panel-default" style="padding:25px;">
        <div class="panel-heading" style="opacity:0.7;">
            <h2 class="animated bounceInDown"> Most Popular Crops as Voted By Users </h2>
        </div>
    <br>
    <canvas id="popularCrop"> </canvas>
    </div>
</div>

<div class="col-lg-6">    
    <div class="panel panel-default" style="padding:25px;">
        <div class="panel-heading" style="opacity:0.7;">
            <h2 class="animated bounceInDown"> Top 5 Highest Grossing Fruits [KG] </h2>
        </div>
    <br>
    <canvas id="popularFruit"> </canvas>
    </div>
</div>








</div>
</div>



<script>
    
    var farmers_Buyers = document.getElementById('farmers_Buyers').getContext('2d');
    
    var farmerAndBuyers = new Chart(farmers_Buyers, {
        
        type: 'pie', //bar, horizontalBar, pie, line, doughnut, radar, polarArea 
        data: {
            labels: ['Farmers', 'Buyers'], 
            datasets: [{
                label: 'Number of Farmers & Buyers Registered',
                data:
                [
                    76,
                    60
        
                ],
                backgroundColor: 
                [
                    'rgba(255,95,120,0.6)',
                    'rgba(255,159,64,0.6)',
                ]
            }]
            
        },
        options: {},
        
        
    });
    
    
    
    var popularVeg = document.getElementById('popularVeg').getContext('2d');
    
    var popVeg = new Chart(popularVeg, {
        
        type: 'horizontalBar', //bar, horizontalBar, pie, line, doughnut, radar, polarArea 
        data: {
            labels: ['Boulanger', 'Tomato', 'Sweet Pepper', 'Bora', 'Cabbage'],
            datasets: [{
                label: 'Top 5 Highest Grossing Vegetables',
                data:
                [
                    450,
                    345,
                    347,
                    286,
                    140
        
                ],
                backgroundColor: 
                [
                    'rgba(255,95,120,0.6)',
                    'rgba(255,159,64,0.6)',
                    'rgba(255,143,98,0.6)',
                    'rgba(255,45,56,0.6)',
                    'rgba(255,124,67,0.6)'
                ]
            }]
            
        },
        options: {},
        
        
        
        
    });
    
    
    var popularCrop = document.getElementById('popularCrop').getContext('2d');
    
    var popCrop = new Chart(popularCrop, {
        
        type: 'doughnut', //bar, horizontalBar, pie, line, doughnut, radar, polarArea 
        data: {
            labels: ['Sugar Cane', 'Maiz', 'Rice', 'Wheat', 'Potatoes'],
            datasets: [{
                label: 'Most Popular Crops',
                data:
                [
                    790,
                    559,
                    455,
                    390,
                    349
        
                ],
                backgroundColor: 
                [
                    'rgba(213, 231, 116, 0.6)',
                    'rgba(231, 116, 116, 0.6)',
                    'rgba(116, 147, 231, 0.6)',
                    'rgba(155, 45, 156, 0.6)',
                    'rgba(235, 153, 153, 0.6)'
                ]
            }]
            
        },
        options: {},
        
        
        
        
    });
    
    
    var popularFruit = document.getElementById('popularFruit').getContext('2d');
    
    var popFruit = new Chart(popularFruit, {
        
        type: 'horizontalBar', //OPTIONS: bar, horizontalBar, pie, line, doughnut, radar, polarArea 
        data: {
            labels: ['Banana', 'Apple', 'Orange', 'Grape', 'Mango'],
            datasets: [{
                label: 'Top 5 Highest Grossing Fruits',
                data:
                [
                    655,
                    345,
                    123,
                    578,
                    456
        
                ],
                backgroundColor: 
                [
                    'rgba(155,95,120,0.6)',
                    'rgba(145,159,64,0.6)',
                    'rgba(64,143,98,0.6)',
                    'rgba(90,45,56,0.6)',
                    'rgba(215,124,67,0.6)'
                ]
            }]
            
        },
        options: {},
        
        
        
        
    });
    
    
</script>








</html>