<li class="shopping-item-block " id="s010">
    <div class="shopping-item-img">
        <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
    </div>
    <div class="text">
        <h5 class="name" id = "name">{{$item}}</h5>
        <h5 class="price">NT$240</h5>
        <p class="description">耐用好穿</p>
        <select name="選單名稱" size="1">
            <option value="1" selected> 1
                <option value="2">2
                    <option value="3">3
        </select>
        <button type="button" class="btn btn-outline-dark btn-sm" onclick="addCart('s001')">加入購物車</button>
    </div>
</li>