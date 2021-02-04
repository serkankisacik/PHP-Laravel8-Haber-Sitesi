@extends('layouts.main')

@section('title', $setting->title )
@section('pagetitle', "Künye" )
@section('description')
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('content')
    <section id="category_section" class="category_section">
        <div class="container">
            <div class="entity_content">
                <h1 align="center">{{$setting->title}} Künye</h1>
                @if($setting->tag !=null)
                    <p>{{$setting->tag}}</p>
                @endif
                @if($setting->tag == null)
                <p class="MsoNoSpacing" style="text-align: left;"><strong><span>İmtiyaz Sahibi ve Sorumlu Editör / Concession Owner and Responsible Editor</span></strong><br />
                        – </p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span>Genel Yayın Yönetmeni / Editor in Chief</span></strong><br />
                         – </p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span>Web Site &amp; Teknik Danışman / Website &amp; Technical Advisor</span></strong><br />
                        Serkan Kısacık</p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span>Editörler / Editors</span></strong><br /> - </p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span>Gece Vardiyası Editörü / Night Shift Editor</span></strong><br />
                         – </p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span">Köşe Yazarları / Columnists</span></strong><br /> - </p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span>Hukuk Danışmanı / Jurisconsult</span></strong><br />
                        <strong><span calibri=""> AVUKATLIK BÜROSU</span></strong><br /></p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span calibri="" style="font-family:">Mali Müşavir / Financial Advisor</span></strong><br />
                        <strong><span calibri="" style="font-family:">Serbest Muhasebeci ve Mali Müşavirlik Bürosu</span></strong><br /></p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span calibri="" style="font-family:">Reklam / Advertise</span></strong><br />– </p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span calibri="" style="font-family:">YAZILIM ve SİSTEM YÖNETİMİ / System Management</span></strong><br />
                        Serkan Kısacık ile Laravel altyapısı kullanılmaktadır</p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span calibri="" style="font-family:">SERVİS SAĞLAYICI / Service Provider</span></strong><br />
                        </p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span calibri="" style="font-family:">YÖNETİM MERKEZİ / Management Centre</span></strong><br />
                        </p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span calibri="" style="font-family:">İLETİŞİM / Communication</span></strong><br />
                     </p>
                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span calibri="" style="font-family:">HABER KALDIRTMA VE TEKZİP TALEPLERİNİZ İÇİN İLETİŞİME GEÇİNİZ.</span></strong><br />
                        <strong><span calibri="" style="font-family:">© TÜM HAKLARI SAKLIDIR</span></strong><br />
                        ’da yayımlanan haber ve görseller kaynak gösterilmeden kullanılamaz.<br />
                        ’da yayımlanan köşe yazılarının ve yorumların sorumluluğu yazarına aittir.<br />
                        Web sitemiz dışındaki farklı sitelere yönlendirilen linklerin içeriklerinden, {{route('home')}} sorumlu tutulamaz.<br />
                        {{$setting->title}}’de yayınlanan köşe yazılarından doğabilecek hukuki tüm sorumluluk yazının sahibinin (Köşe Yazarı) kendisine aittir.</p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span calibri="" style="font-family:">GİZLİLİK POLİTİKASI</span></strong><br />
                        © Copyrigth 20 {{route('home')}} tüm hakları saklıdır. Kod, haber, resim, röportaj gibi her türlü içeriğinin tüm telif hakları {{route('home')}}’a aittir. {{route('home')}} sitesinde yer alan bütün yazılar, materyaller, resimler, ses dosyaları, animasyonlar, videolar, dizayn, tasarım ve düzenlemelerimizin telif hakları 5846 sayılı yasa ile telif hakları korunmaktadır. Bunlar {{route('home')}}’un yazılı izni olmaksızın ticari olarak herhangi bir şekilde kopyalanamaz, dağıtılamaz, değiştirilemez, yayınlanamaz. İzinsiz ve kaynak belirtilmeksizin kopyalama ve kullanımı yapılamaz.<br />
                        {{route('home')}}’daki harici linkler ayrı bir sayfada açılır. Yayınlanan yazı ve yorumlardan yazarları sorumludur. {{route('home')}}’da hiçbir bildirim yapmadan, herhangi bir zaman değişikliğe gidebilir. Bu sitedeki bilgilerden kaynaklı hataların hiçbirinden sorumlu değildir.</p>

                    <p class="MsoNoSpacing" style="text-align: left;"><strong><span calibri="" style="font-family:">PRIVACY POLICY</span></strong><br />
                        We will keep your information confidential except where disclosure is required or permitted by law (for example to government bodies and law enforcement agencies). Generally, we will only use your information within the {{route('home')}}. However, sometimes the {{route('home')}} uses third parties to process your information. {{route('home')}} requires these third parties to comply strictly with its instructions and the {{route('home')}} requires that they do not use your personal information for their own business purposes, unless you have explicitly consented to the use of your personal information in this way. When you interact with the {{route('home')}} we sometimes receive personal information about you. For example, if you write to us or sign up to a newsletter, you might tell us who you are, how we can contact you and what you think of the {{route('home')}} and its services. When you use {{route('home')}} online services, we use cookies and collect IP addresses. You can find out more about this in the {{route('home')}} cookies section of our full Privacy Policy.</p>

                    <p class="MsoNoSpacing" style="text-align: left;">Sitedeki tüm harici linkler ayrı bir sayfada açılır.</p>

                    <p class="MsoNoSpacing" style="text-align: left;">{{route('home')}} harici linklerin sorumluluğunu almaz.</p>
                @endif

            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
@endsection

