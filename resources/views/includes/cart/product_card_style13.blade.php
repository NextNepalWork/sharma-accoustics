<template id="product-card-template">
  <div class="div-class">
<div class="product product9">
  <article>
   <div class="thumb">
     {{-- <div class="badges">
              
       <span class="badge badge-success label-circle">featured</span>
       <span class="badge badge-info label-circle">New</span>
       <span class="badge badge-danger  label-circle">50%</span>           

   
     </div> --}}
    

     <img class="img-fluid product-card-image" src="" alt="Modern Single Sofa">
     <div class="product-action">
        <a class="btn-secondary btn icon swipe-to-top product-card-link">
            <i class="fas fa-shopping-bag"></i> 
           </a>
            <div class="btn  btn-secondary icon swipe-to-top quick-view-icon" data-toggle="modal" data-target="#quickViewModal" data-tooltip="tooltip" data-placement="bottom" title="" data-original-title="Quick View">
                <i class="fas fa-eye"></i>  </div>
         
                <a href="javascript:void(0)" class="icon btn btn-secondary active swipe-to-top wishlist-icon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Wishlist">
                    <i class="fas fa-heart"></i>
                  </a>
    </div>
    </div>
    <span class="d-none compare-icon"></span>
    
   <div class="content">
     <span class="tag product-card-category">                             
     </span>
     <h5 class="title"><a href="javascript:void(0)" class="product-card-name"></a></h5>
     <p class="para product-card-desc"></p>
     <div class="price product-card-price">                 
    </div>  
  

  </div>
</article>
<div class="d-none display-rating" ></div>
        <div class="d-none display-rating1" ></div>
</div>
</div>
</template>