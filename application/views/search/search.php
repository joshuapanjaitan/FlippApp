<!DOCTYPE html>
<html>
<head>
	<title><?=$judul ?></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('css/')?>search.css">
</head>
<body>
	<!-- feature search -->
	<div class="wadah">
	<form class="form_search"role="search" method="get" action="/search">
		<div class="form_inputan">
			<input type="search" class="search" placeholder="Search within these results" name="search" value="">
			<button class="button_search" >
				<span class="button_search1">Search</span>
				<svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="20" width="20" viewBox="0 0 512 512" class="_1PQSW" style="vertical-align:middle">
					<title>Search</title>
					<g><path d="M507.5 469.3c0 10.5-3.8 19.5-11.5 27.2s-16.7 11.5-27.2 11.5c-10.9 0-20-3.8-27.2-11.5l-103.7-103.4c-36.1 25-76.3 37.5-120.6 37.5-28.8 0-56.4-5.6-82.7-16.8s-49-26.3-68-45.3-34.2-41.7-45.3-68c-11.2-26.3-16.8-53.9-16.8-82.7s5.6-56.4 16.8-82.7 26.3-49 45.3-68 41.7-34.2 68-45.3c26.3-11.2 53.9-16.8 82.7-16.8s56.4 5.6 82.7 16.8c26.3 11.2 49 26.3 68 45.3s34.2 41.7 45.3 68c11.2 26.3 16.8 53.9 16.8 82.7 0 44.3-12.5 84.5-37.5 120.6l103.7 103.7c7.5 7.5 11.2 16.5 11.2 27.2zm-154.8-251.5c0-37.3-13.2-69.2-39.8-95.7-26.5-26.5-58.4-39.8-95.7-39.8s-69.2 13.3-95.7 39.8-39.8 58.4-39.8 95.7 13.2 69.2 39.8 95.7c26.5 26.5 58.4 39.8 95.7 39.8s69.2-13.2 95.7-39.8c26.6-26.5 39.8-58.4 39.8-95.7z"></path>
					</g>
				</svg>
			</button>
		</div>
	</form>
	<!-- feature &refine -->
	<div class="feature">
		<div class="bagian_atas">
			<div class="button_feature">
				<button class="button_filter1" id="flilter">
					<div class="cross"><span></span></div>Filter & Refine
				</button>	
			</div>
			<div class="sortby">
				<label for="sortby" class="_35LYV">Sort by: </label>
				<select id="sortby" name="sortby" class="_2s17p">
					<option value="trending">Trending items</option>
					<option value="sales">Best sellers</option>
					<option value="rating">Best rated</option>
					<option value="date">Newest items</option>
					<option value="price-asc">Price: low to high</option>
					<option value="price-desc">Price: high to low</option>
				</select>		
			</div>
		</div>
		<div class="bagian_bawah">	
			<div class="Bagian-kiri " id="samping">
			<div class="filetr-category">
				<button class="category" type="button">
					<div class="category1">
						<h3>Category</h3>
					</div>
				</button> 
				<div class="isi-category">
					<ul>
						<li>
							<span>All categories</span>
							<span>28,513</span>
						</li>
						<li>
							<span>WordPress</span>
							<span>6,882</span>
						</li>
						<li>
							<span>Mobile</span>
							<span>6,233</span>
						</li>
						<li>
							<span>HTML5</span>
							<span>4,963</span>
						</li>
						<li>
							<span>PHP Scripts</span>
							<span>4,666</span>
						</li>
						<li>
							<span>Plugins</span>
							<span>2,111</span>
						</li>
						<li>
							<span>JavaScript</span>
							<span>2,000</span>
						</li>
						<li>
							<span>CSS</span>
							<span>1,400</span>
						</li>
						<li>
							<span>.NET</span>
							<span>420</span>
						</li>
						<li>
							<span>Apps</span>
							<span>365</span>
						</li>
						<li>
							<span>Skins</span>
							<span>170</span>
						</li>
						<li>
							<span>Edge Animate Templates</span>
							<span>148</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="filter-tags">
				<button class="tags" type="button">
					<div class="tags1">
						<h3>Tags</h3>
					</div>
				</button>
				<div class="isi-tags">
					<ul>
						<li>
							<input type="checkbox" name="Html5">
							<span>Html5</span>
							<span>3,292</span>
						</li>
						<li>
							<input type="checkbox" name="Android">
							<span>Android</span>
							<span>3,207</span>
						</li>
						<li>
							<input type="checkbox" name="Html5">
							<span>Ios</span>
							<span>2,483</span>
						</li>
						<li>
							<input type="checkbox" name="Game">
							<span>Game</span>
							<span>2,443</span>
						</li>
						<li>
							<input type="checkbox" name="Mobile">
							<span>Mobile</span>
							<span>2,000</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="filter-price">
				<button class="price" type="button">
					<div class="price1">
						<h3>Price</h3>
					</div>
				</button>
				<div class="rank-price">
					<div class="minimum">
						<span>Rp</span>	
						<input min="0" type="text" name="Minimum price" class="Minimum-price" placeholder="Min" value="" size="9">		
					</div>
					<div class="garis">-</div>
					<div class="maksimum">
						<input min="0" type="text" name="Maximum price" class="Maximum-price" placeholder="Max" value="" size="9">
					</div>
					<button class="chevron" type="button">
						<svg class="chevron-right"></svg>
					</button>
				</div>
			</div>
			<div class="filter-rating">
				<button class="rating" type="button">
					<div class="rating1">
						<h3>Rating</h3>
					</div>
				</button>
				<div class="isi-rating">
					<ul>
						<li>
							<input type="radio" name="Show All">
							<span>Show All</span>
							<span>28,623</span>
						</li>
						<li>
							<input type="radio" name="1 star and higher">
							<span>1 star and higher</span>
							<span>3,207</span>
						</li>
						<li>
							<input type="radio" name="2 star and higher">
							<span>2 star and higher</span>
							<span>2,483</span>
						</li>
						<li>
							<input type="radio" name="3 star and higher">
							<span>3 star and higher</span>
							<span>2,443</span>
						</li>
						<li>
							<input type="radio" name="4 star and higher">
							<span>4 star and higher</span>
							<span>2,000</span>
						</li>
					</ul>
					
				</div>
			</div>
		</div>
		<div class="bagian-kanan" id="utama">
			<div class="Artikel"></div>
			<div class="Artikel1"></div>
			<div class="Artikel2"></div>
			<div class="Artikel3"></div>
			<div class="Artikel4"></div>
			<div class="Artikel5"></div>
		</div>			
		</div>
	</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script>
$( document ).ready(function() {
	$('.cross').on('click', function() {
      this.classList.toggle('active');
    });
    $('#flilter').click(function(){
    	$('#samping').toggleClass('side-hide');
    	$('#utama').toggleClass('side-none');
    });
});
</script>
</body>
</html>