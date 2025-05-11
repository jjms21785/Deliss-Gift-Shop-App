<!-- 
NOTE: 
Modify this header according to your assigned page.
Para to sa Login/Register nakahiwalay lang para madali makita at makopya. 
 -->

<style>
    .top-bar {
        background: #1c1c1c;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 42px;
        color: pink;
        font-weight: bold;
    }

    .top-items {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .top-items a, .user-btn {
        display: flex;
        align-items: center;
        color: #fff;
        background: #333333;
        border: none;
        font-weight: bold;
        padding: 5px 30px;
        border-radius: 25px;
        gap: 15px;
        cursor: pointer;
    }

    .cart {
        position: relative;
        font-size: 18px;
        cursor: pointer;
    }

    .cart-counter {
        position: absolute;
        right: -10px;
        background: pink;
        color: red;
        border-radius: 50%;
        padding: 4px 8px;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
    }
</style>
<div class="top-bar">
    <div class="logo">Deliss</div>
    <div class="top-items">
      <div class="user-btn">
        <img src="{{ asset('storage/icons/user-icon.png') }}" alt="user">
        <p>Welcome</p>
      </div>
      <div class="cart">
        <img src="{{ asset('storage/icons/cart-icon.png') }}" alt="cart">
        <span class="cart-counter">+</span>
      </div>
    </div>
</div>