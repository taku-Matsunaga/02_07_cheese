//スクロール量を取得する関数
function getScrolled() {
  return ( window.pageYOffset !== undefined ) ? window.pageYOffset: document.documentElement.scrollTop;
}
        
//トップに戻るボタンの要素を取得
var topButton = document.getElementById( 'js-scroll-fadein' );
          
//ボタンの表示・非表示
window.onscroll = function() {
  ( getScrolled() > 500 ) ? topButton.classList.add( 'is-fadein' ): topButton.classList.remove( 'is-fadein' );
};
          
//トップに移動する関数
function scrollToTop() {
  var scrolled = getScrolled();
  window.scrollTo( 0, Math.floor( scrolled / 2 ) );
  if ( scrolled > 0 ) {
    window.setTimeout( scrollToTop, 30 );
  }
};
          
//イベント登録
topButton.onclick = function() {
  scrollToTop();
};


// IntersectionObserver

// 今回の交差を監視する要素
const observes = document.querySelectorAll(".observe");

const options = {
  root: null, // 今回はビューポートをルート要素とする
  rootMargin: "-50% 0px", // ビューポートの中心を判定基準にする
  threshold: 0 // 閾値は0
};
const observer = new IntersectionObserver(doWhenIntersect, options);
// それぞれのobserveを監視する
observes.forEach(observe => {
  observer.observe(observe);
});

/**
 * 交差したときに呼び出す関数
 * @param entries
 */
function doWhenIntersect(entries) {
  // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      activateIndex(entry.target);
    }
  });
}

/**
 * 目次の色を変える関数
 * @param element
 */
function activateIndex(element) {
  // すでにアクティブになっている目次を選択
  const currentActiveIndex = document.querySelector("#indexList .active");
  // すでにアクティブになっているものが0個の時（=null）以外は、activeクラスを除去
  if (currentActiveIndex !== null) {
    currentActiveIndex.classList.remove("active");
  }
  // 引数で渡されたDOMが飛び先のaタグを選択し、activeクラスを付与
  const newActiveIndex = document.querySelector(`a[href='#${element.id}']`);
  newActiveIndex.classList.add("active");
}


// タイトル変化

var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // // INJECT CSS
  // var css = document.createElement("style");
  // css.type = "text/css";
  // css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  // document.body.appendChild(css);
};