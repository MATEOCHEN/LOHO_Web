<li class="shopping-item-block " id={{$item['id']}}>
    <div class="shopping-item-img">
        <img src="{{ asset($item['img_url']) }}" alt="LOHO商品" class="img-fluid">
    </div>
    <div class="text">
        <h5 class="name" id = {{$item['id']}}>{{$item['name']}}</h5>
        <h5 class="price">NT${{$item['price']}}</h5>
        <p class="description">堅韌品質</p>
        <select name="選單名稱" size="1">
            <option value="quantity" selected> 數量
                <option value="1">1
                    <option value="2">2
                        <option value="3">3
        </select>
        <button type="button" class="btn btn-outline-pink btn-sm" onclick="addCart('<?php echo $item['id']; ?>')";>加入購物車</button>
    </div>
</li>