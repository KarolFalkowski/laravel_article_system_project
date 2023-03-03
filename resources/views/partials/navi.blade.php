<nav>
<div class="navbar">
    <a href="<?=config('app.url'); ?>">Home<span></span></a>
    <div class="dropdown">
        <button class="dropbtn">Articles 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="<?=config('app.url'); ?>/article/list">List</a>
            <a href="<?=config('app.url'); ?>/article/add">Add</a>
        </div>
    </div>     
</div>
</nav>