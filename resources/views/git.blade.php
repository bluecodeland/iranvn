
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>گیت - یک راهنمای ساده و نه خیلی سخت ;)</title>
    <link href='http://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/0/normalize.min.css" type="text/css">
	<link rel="stylesheet" href="css/git.css" type="text/css">
	<style type="text/css">
	body{
		direction:rtl;
	}
	code{
		direction:ltr;
		display:inline-block;
		padding:0 5px;
	}
	</style>
    
</head>
<body direction="rtl">


    <div class="scrollblock block-title">
        <h1>git(گیت) - یک  راهنمای ساده</h1>
        <p>تنها یک راهنمای ساده و نه خیلی عمیق برای آغاز به کار با گیت. </p>
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="rogerdudler" data-size="large" data-url="http://rogerdudler.github.com/git-guide" data-related="rogerdudler" data-hashtags="git">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        
        <img src="img/arrow.png" alt="" />
    </div>
    <!-- setup -->
    <a name="setup"></a>
    <div class="scrollblock block-setup">
        <h2>نصب</h2>
        <p>
            <a href="http://code.google.com/p/git-osx-installer/downloads/list?can=3">دانلود گیت برای سیستم عامل مک </a>
        </p>
        <p>
            <a href="http://msysgit.github.io/">دانلود گیت برای سیستم عامل ویندوز</a>
        </p>
        <p>
            <a href="http://book.git-scm.com/2_installing_git.html">دانلود گیت برای لینوکس</a>
        </p>
    </div>
    <a name="create"></a>
    <div class="scrollblock block-create">
        <h2> ساختن یک مخزن (repository)</h2>
        <p>
            یک فولدر بسازید و  دستور  <br />
            <code>git init</code><br />
            را  برای ساختن یک مخزن در گیت اجرا کنید.
        </p>
    </div>
    <a name="checkout"></a>
    <div class="scrollblock block-checkout">
        <h2>برون کشی (checkout) یک مخزن</h2>
        <p>
           یک  کپی از یک مخزن محلی (local)  با دستور زیر به وجود می آید. <br />
            <code>git clone /path/to/repository</code><br />
            زمانی که سرور  راه دور(remote) است از دستور زیر استفاده کنید. <br />
            <code>git clone username@host:/path/to/repository</code>
        </p>
    </div>
    <a name="trees"></a>
    <div class="scrollblock block-trees">
        <h2>گردش کار</h2>
        <p>
		مخزن محلی شما، شامل 3 درخت (tree) می باشد که توسط گیت نگهداری می شود. اولین درخت <code>Working Directory</code> می باشد که 
		شامل فایل های واقعی است. دومین درخت شاخص (<code>Index</code>) می باشد که 
		 رد فایل هایی که تغییر یافته یا اضافه و کم شده را در بر خواهد داشت و در نهایت  	<code>head</code> 
		 که به آخرین commitای که شما انجام داده اید اشاره می کند.
		
        </p>
        <img src="img/trees.png" alt="" />
    </div>
    <a name="add"></a>
    <div class="scrollblock block-add">
        <h2>اضافه کردن و نهایی کردن(add &amp; commit)</h2>
        <p>
            شما می توانید تغییرات را با دستور زیر به درخت شاخص (<b>Index</b>) اضافه کنید. 
			<code>git add &lt;filename&gt;</code><br />
            <code>git add *</code><br />
			این اولین گام در یک گردش کاری با گیت است. برای نهایی کردن تغییرات باید آنها را commit کنید.
			<br />
            <code>git commit -m "Commit message"</code><br />
			حال تغییرات در  <b>HEAD</b> قرار دارد اما سرور راه دور شما هنوز تغییرات را ندارد و همه تغییرات محلی و روی
			کامپیوتر شما است.
            
        </p>
    </div>
    <a name="push"></a>
    <div class="scrollblock block-remote">
        <h2>اعمال تغییرات (pushing changes)</h2>
        <p>
            اگر بخواهید تغییراتی که انجام داده اید و هم اکنون در <b>HEAD</b> قرار دارد به سرور راه دور ارسال شود 
			دستور زیر را اجرا کنید.
			 <br />
            
			<code>git push origin master</code><br />
			این دستور تغییراتی که انجام داده اید را به سرور راه دور شاخه master اعمال می کند.
            
            <br /><br />
            اگر مخزن را clone نکرده باشید و بخواهید به مخزن، خود در یک سرور راه، دور متصل شوید از دستور زیر استفاده کیند.
			<br />
            <code>git remote add origin &lt;server&gt;</code><br />
            حال با دستور push می توانید تغییرات خود را اعمال کنید.
			<br />

        </p>
    </div>
    <a name="branching"></a>
    <div class="scrollblock block-branching">
        <h2>شاخه (Branching)</h2>
        <p>
		شاخه مکانیزمی است که برای برای توسعه ویژگی های (features) سیستم به صورت جداگانه استفاده می شود. زمانی که 
		یک مخزن را به وجود می آورید شاخه اصلی (master) شاخه پیش فرص می باشد. برای توسعه سیستم از شاخه ها مختلف استفاده کنید و 
		آنها را زمانی که کامل شدند با شاخه اصلی ادغام کنید.
            
        </p>
        <img src="img/branches.png" alt="" />
        <p>
            
			دستور زیر شاخه ای با نام "feature_x" می سازد و به آن شاخه می رود.
			<br />
            <code>git checkout -b feature_x</code><br />
            برای بازگشتن به شاخه اصلی<br />
            <code>git checkout master</code><br />
            برای حذف کردن شاخه feature_x<br />
            <code>git branch -d feature_x</code><br />
			توجه کنید که یک شاخه  <i>برای دیگران قابل دسترسی نیست</i> مگر اینکه شما آن را به سرور راه دور push کنید.
			<br />
            <code>git push origin &lt;branch&gt;</code>
        </p>
    </div>
    <a name="update"></a>
    <div class="scrollblock block-merging">
        <h2>به روز رسانی و ادغام (update &amp; merge)</h2>
        <p>
            
			برای به روز رسانی مخزن محلی خود با جدیدترین commit ای که صورت گرفته از دستور زیر استفاه کنید.
			<br />
            <code>git pull</code><br />
			این دستور تغییرات سرور راه دور را <i>واکشی(fetch) </i> و با فایل های محیط کار شما <i>ادغام(merge)</i> می کند.
            <br />
  برای ادغام شاخه ای دیگر به شاخه ای که الان مشغول کار بر روی آن هستید (مثلا شاخه اصلی) از دستور زیر استفاه کنید.
  
  <br />
            <code>git merge &lt;branch&gt;</code><br />
			در هر دو فرمان بالا گیت سعی می کند ادغام را به صورت خودکار اعمال کند. این کار همیشه امکانپذیر نیست و گاهی اوقات 
			<i> ناسازگاری (conflicts)</i> صورت می گیرد. در این حالت این وظیفه شما است که این ناسازگاری ها را به صورت دستی و با ویرایش فایل هایی که ناسازگاری دارند رفع کنید. 
			این فایل ها توسط گیت به شما نمایش داده می شوند. بعد از تغییرات شما باید آنها را به عنوان فایل های ادغام شده علامت گذاری کنید.
			</br>
            <code>git add &lt;filename&gt;</code><br />
            قبل از ادغام تغییرات برای  مشاهده(preview)  می توانید  از دستور زیر استفاده کنید.<br />
            <code>git diff &lt;source_branch&gt; &lt;target_branch&gt;</code>
        </p>
    </div>
    <a name="tagging"></a>
    <div class="scrollblock block-tagging">
        <h2> بر چسب گذاری (tagging)</h2>
        <p>
            توصیه می شود که برای انتشار نرم افزار آن را برچسب گذاری کنید. این مفهومی شناخته شده است که در SVN نیز وجود دارد. برای به وجود آوردن برچسبی با نام <i>1.0.0</i>
			باید دستور زیر را اجرا کنید.
			</br>
            <code>git tag 1.0.0 1b2e1d63ff</code><br />
            در واقع عدد <i>1b2e1d63ff</i>  ده  رقم اول id ی commit شما می باشد. برای به دست آوردن commit id  می توانید از دستور log که در بخش بعدی آمده استفاده کنید.
			
			<br />
        </p>
    </div>
    <a name="log"></a>
    <div class="scrollblock block-log">
        <h2>لاگ (log)</h2>
        <p>
           
            <code>git log</code><br />
			ساده ترین دستوری است که شما می توانید تاریخچه یک مخزن را داشته باشید. به این دستور ساده شما می توانید پارامتر های مختلفی را اضافه کنید تا خروجی دستور به شکلی
			که شما دوست دارید باشد.
			</br>
			برای دیدن commit های یک شخص مشخص:</br>
			<code>git log --author=bob</code><br />
            برای دیدن حالت فشرده شده دستور لاگ که هر خط نشانگر یک commit باشد:<br />
            <code>git log --pretty=oneline</code><br />
            برای مشاهده درخت ASCII تمامی شاخه ها در یک خط به همراه نام برچسب ها و شاخه ها: <br />
            <code>git log --graph --oneline --decorate --all</code><br />
            برای دیدن نام فایل هایی که در هر commit تغییر یافته اند: <br />
            <code>git log --name-status</code><br />
            برای دیدن پارامتر های بیشتر این دستور می توانید دستور زیر را اجرا کنید.
            <code>git log --help</code><br />
        </p>
    </div>
    <a name="checkout-replace"></a>
    <div class="scrollblock block-checkout-replace">
        <h2>بازگرداندن تغییرات محلی</h2>
        <p>
		در صورتی که چیزی را  اشتباه انجام دادید و بخواهید که تغییرات را بازگردانید از دستور زیر استفاده کنید.<br />
            <code>git checkout -- &lt;filename&gt;</code><br />
			با این دستور شما تغییراتی که داده اید را با آخرین محتویات HEAD تغییر می دهد.  نیز فایل های جدید که تازه ساخته شده اند دست نخورده باقی خواهند ماند.
            
        </p>
        <p>
            اگر قصد پاک سازی تمامی تغییرات و commit های محلی خود را دارید می توانید آخرین تاریخچه را از سرور راه دور واکشی کنید و با دستور های زیر
			 شاخه master محلی خود را به آن اشاره دهید. <br />
            <code>git fetch origin</code><br />
            <code>git reset --hard origin/master</code>
        </p>
    </div>
    <a name="hints"></a>
    <div class="scrollblock block-hints">
        <h2>تذکرهای مفید</h2>
        <p>
            گیت به صورت گرافیکی<br />
            <code>gitk</code><br />
            از خروجی های رنگی برای گیت استفاده کنید.<br />
            <code>git config color.ui true</code><br />
            هر خط در لاگ برای یک commit در نظر گرفته شود.<br />
            <code>git config format.pretty oneline</code><br />
            از حال تعاملی فرمان add استفاده کنید.<br />
            <code>git add -i</code>
        </p>
    </div>
    
</body>
</html>
