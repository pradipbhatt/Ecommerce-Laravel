<div class="latest-products" style="background-color: #f9f5ff; padding: 20px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading" style="text-align: center; margin-bottom: 20px;">
          <h2 style="color: #333;">Latest Products</h2>
          <a href="products.html" style="color: #007bff; text-decoration: none; font-weight: bold;">
            View All Products <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>

      @foreach($data as $product)
      <div class="col-md-4" style="margin-bottom: 15px;">
        <div class="product-item" style="border: 1px solid #ddd; border-radius: 5px; overflow: hidden; background-color: #fff;">
          <a href="#"><img src="/productimage/{{ $product->image }}" alt="" style="width: 100%; height: auto;"></a>
          <div class="down-content" style="padding: 10px; text-align: center;">
            <a href="#" style="text-decoration: none;"><h4 style="color: #333; font-size: 16px;">{{ $product->title }}</h4></a>
            <h6 style="color: #007bff; font-size: 14px;">₹{{ $product->price }}</h6>
            <p style="color: #666; font-size: 12px;">{{ $product->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="row">
      <div class="col-md-12" style="text-align: center; margin-top: 20px;">
        {{ $data->links('pagination::bootstrap-4') }}
      </div>
    </div>
  </div>
</div>
