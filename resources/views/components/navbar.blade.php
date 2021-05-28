<nav id="nav" class="navbar navbar-expand-lg fixed-top navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">{{ $site_name }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNav" class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">ホーム</a>
        </li>
@foreach ($subcategory_names as $_category_id => $_subcategories)
        <li class="nav-item dropdown">
          <a id="category-dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false">{{ $category_names[$_category_id][1] }}</a>
          <ul class="dropdown-menu" aria-labelledby="category-dropdown">
@foreach ($_subcategories as $_subcategory_id => $_subcategory_info)
            <li>
              <a class="dropdown-item" href="{{ $_subcategory_info[0]}}">{{ $_subcategory_info[1] }}</a>
            </li>
@endforeach
          </ul>
        </li>
@endforeach
      </ul>
    </div>
  </div><!-- container-fluid -->
</nav>
