<div class="col-lg-3 order-lg-first col-md-12 order-md-last">
    <div class="shop-sidebar-wrap">
        <!-- Sidebar single item -->
        <div class="sidebar-widget">
            <h4 class="sidebar-title">Categories</h4>
            <div class="sidebar-widget-category">
                <ul>
                    @foreach($category as $item)
                        <li><a href="{{route('category', $item->category_id)}}" class=""> {{$item->category_name}}<span>(12)</span> </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Sidebar single item -->
        <div class="sidebar-widget mt-8">
            <h4 class="sidebar-title">Price Filter</h4>
            <div class="price-filter">
                <div class="price-slider-amount">
                    <input type="text" id="amount" class="p-0 h-auto lh-1" name="price" placeholder="Add Your Price" />
                </div>
                <div id="slider-range"></div>
            </div>
        </div>
        <!-- Sidebar single item -->
        <div class="sidebar-widget">
            <h4 class="sidebar-title">Tags</h4>
            <div class="sidebar-widget-color">
                @foreach($tag as $item)
                    <a href="{{route('tag', $item->tag_id)}}">{{$item->tag_name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
