
        // <![CDATA[
          var colour="random"; // in addition to "random" can be set to any valid colour eg "#f0f" or "red"
          var sparkles=50;
  
  
  
          /****************************
           * Tinkerbell Magic Sparkle *
           *(c)2005-11 mf2fm web-design*
           * http://www.mf2fm.com/rv *
           * DON'T EDIT BELOW THIS BOX *
           ****************************/
  
          var x=ox=400;
          var y=oy=300;
          var swide=800;
          var shigh=600;
          var sleft=sdown=0;
          var tiny=new Array();
          var star=new Array();
          var starv=new Array();
          var starx=new Array();
          var stary=new Array();
          var tinyx=new Array();
          var tinyy=new Array();
          var tinyv=new Array();
  
          window.onload=function() { if (document.getElementById) {
              var i, rats, rlef, rdow;
              for (var i=0; i<sparkles; i++) {
                  var rats=createDiv(3, 3);
                  rats.style.visibility="hidden";
                  document.body.appendChild(tiny[i]=rats);
                  starv[i]=0;
                  tinyv[i]=0;
                  var rats=createDiv(5, 5);
                  rats.style.backgroundColor="transparent";
                  rats.style.visibility="hidden";
                  var rlef=createDiv(1, 5);
                  var rdow=createDiv(5, 1);
                  rats.appendChild(rlef);
                  rats.appendChild(rdow);
                  rlef.style.top="2px";
                  rlef.style.left="0px";
                  rdow.style.top="0px";
                  rdow.style.left="2px";
                  document.body.appendChild(star[i]=rats);
              }
  
              set_width();
              sparkle();
          }}
  
          function sparkle() {
              var c;
              if (x!=ox || y!=oy) {
                  ox=x;
                  oy=y;
                  for (c=0; c<sparkles; c++) if (!starv[c]) {
                      star[c].style.left=(starx[c]=x)+"px";
                      star[c].style.top=(stary[c]=y)+"px";
                      star[c].style.clip="rect(0px, 5px, 5px, 0px)";
                      star[c].childNodes[0].style.backgroundColor=star[c].childNodes[1].style.backgroundColor=(colour=="random")?newMagentaColour():colour;
  
                      star[c].style.visibility="visible";
                      starv[c]=50;
                      break;
                  }
              }
              for (c=0; c<sparkles; c++) {
                  if (starv[c]) update_star(c);
                  if (tinyv[c]) update_tiny(c);
              }
              setTimeout("sparkle()", 40);
          }
  
  
  
          function update_star(i) {
              if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
              if (starv[i]) {
                  stary[i]+=1+Math.random()*3;
                  if (stary[i]<shigh+sdown && starx[i]>0) {
                      star[i].style.top=stary[i]+"px";
                      starx[i]+=(i%5-2)/5;
                      star[i].style.left=starx[i]+"px";
                  }
                  else {
                      star[i].style.visibility="hidden";
                      starv[i]=0;
                      return;
                  }
              }
  
              else {
                  tinyv[i]=50;
                  tiny[i].style.top=(tinyy[i]=stary[i])+"px";
                  tiny[i].style.left=(tinyx[i]=starx[i])+"px";
                  tiny[i].style.width="2px";
                  tiny[i].style.height="2px";
                  tiny[i].style.backgroundColor=star[i].childNodes[0].style.backgroundColor;
                  star[i].style.visibility="hidden";
                  tiny[i].style.visibility="visible"
              }
          }
  
          function update_tiny(i) {
              if (--tinyv[i]==25) {
                  tiny[i].style.width="1px";
                  tiny[i].style.height="1px";
              }
  
              if (tinyv[i]) {
                  tinyy[i]+=1+Math.random()*3;
                  if (tinyy[i]<shigh+sdown && tinyx[i]>0) {
                      tiny[i].style.top=tinyy[i]+"px";
                      tinyx[i]+=(i%5-2)/5;
                      tiny[i].style.left=tinyx[i]+"px";
                  }
  
                  else {
                      tiny[i].style.visibility="hidden";
                      tinyv[i]=0;
                      return;
                  }
              }
              else tiny[i].style.visibility="hidden";
          }
  
          document.onmousemove=mouse;
          function mouse(e) {
              set_scroll();
              y=(e)?e.pageY:event.y+sdown;
              x=(e)?e.pageX:event.x+sleft;
          }
  
          function set_scroll() {
              if (typeof(self.scrollY)=="number") {
                  sdown=self.scrollY;
                  sleft=self.scrollY;
              }
              else if (document.body.scrollTop || document.body.scrollLeft) {
                  sdown=document.body.scrollTop;
                  sleft=document.body.scrollLeft;
              }
              else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
                  sleft=document.documentElement.scrollLeft;
                  sdown=document.documentElement.scrollTop;
              }
              else {
                  sdown=0;
                  sleft=0;
              }
          }
  
          window.onresize=set_width;
          function set_width() {
              if (typeof(self.innerWidth)=="number") {
                  swide=self.innerWidth;
                  shigh=self.innerHeight;
              }
  
              else if (document.documentElement && document.documentElement.clientWidth) {
                  swide=document.documentElement.clientWidth;
                  shigh=document.documentElement.clientHeight;
              }
  
              else if (document.body.clientWidth) {
                  swide=document.body.clientWidth;
                  shigh=document.body.clientHeight;
              }
          }
  
          function createDiv(height, width) {
              var div=document.createElement("div");
              div.style.position="absolute";
              div.style.height=height+"px";
              div.style.width=width+"px";
              div.style.overflow="hidden";
              return (div);
          }
  
          // function newColour() {
          //     var c=new Array();
          //     c[0]=255;
          //     c[1]=Math.floor(Math.random()*256);
          //     c[2]=Math.floor(Math.random()*(256-c[1]/2));
          //     c.sort(function(){return (0.5 - Math.random());});
          //     return ("rgb("+c[0]+", "+c[1]+", "+c[2]+")");
          // }
          function newMagentaColour() {
            const customColours=['#D97803', '#F6E3DC', '#BBCDCF', '#963E67',, '#BF5083', '#8C4D8D'];
      
            const randomColour = customColours[Math.floor(Math.random() * customColours.length)]; 
            console.log(randomColour);
            return randomColour;
        }
  
          // ]]>

          // myArray[Math.floor(Math.random() * myArray.length)];  




document.addEventListener("DOMContentLoaded", function() {

 const linkTags = document.querySelectorAll('a');
 const updatedLinkTags = Array.prototype.slice.call(linkTags);
 console.log('updated ', updatedLinkTags);
 const finalTags = updatedLinkTags.shift();
 console.log('final tags ', updatedLinkTags);

 updatedLinkTags.forEach(el => {
  el.classList.add('fade');
})



        
//nav scroll
/* Code can be found in repo: https://github.com/robole/artifice
*/

let logo = document.querySelector(".main-header");
let previousScrollPosition = 0;

const isScrollingDown = () => {
  let goingDown = false;
  let scrollPosition = window.scrollY;

  if (scrollPosition > previousScrollPosition) {
    goingDown = true;
  }

  previousScrollPosition = scrollPosition;

  return goingDown;
};

const handleScroll = () => {
  if (isScrollingDown()) {
    const headerHeight = logo.offsetHeight;
    console.log(headerHeight);
    logo.classList.add("scroll-down");
    logo.style.top = "-111px";
    logo.classList.remove("scroll-up");
  } else {
    logo.classList.add("scroll-up");
    logo.classList.remove("scroll-down");
      logo.style.top = "0"
  }
};

const scrollThrottle = _.throttle(handleScroll, 100);
window.addEventListener("scroll", scrollThrottle);


//Vanila waypoints
const waypoints = document.querySelectorAll('.fade-me');

const elementIsVisibleInViewport = (el, partiallyVisible = false) => {
  const { top, left, bottom, right } = el.getBoundingClientRect();
  const { innerHeight, innerWidth } = window;
  return partiallyVisible
    ? ((top > 0 && top < innerHeight) ||
        (bottom > 0 && bottom < innerHeight)) &&
        ((left > 0 && left < innerWidth) || (right > 0 && right < innerWidth))
    : top >= 0 && left >= 0 && bottom <= innerHeight && right <= innerWidth;
};

function checkpoints(){
 waypoints.forEach(waypoint => {
  const visible = elementIsVisibleInViewport(waypoint);
  if(visible){
    waypoint.classList.add('faded-in')
    // console.log('faded in');
  } else {
    // console.log('not visible');
  }
  })
}


window.addEventListener("scroll", checkpoints);


  //better carousel


  // const imageList = document.querySelector(".slider-wrapper .image-list");
  // const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
  // const singleSlides = document.querySelectorAll(".single-slide");
  
  // const initSlider = () => {
  
  // // console.log(singleSlides);  
  // // console.log(imageList.clientWidth/3);
  
  // const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
  
  
  // //set slide width
  // singleSlides.forEach(single =>{
  //   if(window.innerWidth < 600){
  //     single.style.width = (imageList.clientWidth ) + 'px';
  //   } else if(window.innerWidth < 800){
  //     single.style.width = (imageList.clientWidth ) / 2 + 'px';
  //   } else {
  //     single.style.width = (imageList.clientWidth ) / 3 + 'px';
  //   }
  // })
    
  //   // Slide images according to the slide button clicks
  //   slideButtons.forEach(button => {
  //       button.addEventListener("click", () => {
  //           const direction = button.id === "prev-slide" ? -1 : 1;
  //           const scrollAmount = imageList.clientWidth * direction;
  //           imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
  //       });
  //   });
  //    // Show or hide slide buttons based on scroll position
  //   const handleSlideButtons = () => {
  //       slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
  //       slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
  //   }
  
  //   // Call these two functions when image list scrolls
  //   imageList.addEventListener("scroll", () => {
  //       handleSlideButtons();
  //   });
  // }
  
  // window.addEventListener("resize", initSlider );
  // window.addEventListener("load", initSlider);


//add aria labels to this

const accordionItems = document.querySelectorAll('.accordion-item');

const remove = () => {
  accordionItems.forEach(el => {
    el.setAttribute('aria-expanded', 'false');
    console.log('remove fired');
  })
}
function toggleAccordion(){

  if(this.ariaExpanded === "false"){
    remove();
    this.setAttribute('aria-expanded', 'true');
  } else {
    remove();
    this.setAttribute('aria-expanded', 'false');
  }
 
}

accordionItems.forEach(item => item.addEventListener('click', toggleAccordion));



// fade-out

const links = document.querySelectorAll('a.fade');
const main = document.querySelector('.main-content');

for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function(event){
        event.preventDefault();
        const href = this.getAttribute('href');
        main.classList.add('fade-out');
        console.log('added fade-out')
        setTimeout(() => {
            window.location.href = href;
            console.log('changes pages');
        }, 1000);
    });
}


//add classes to subnav for easier styling
const topSubnavs = document.querySelectorAll('#menu-main-menu > .menu-item-has-children>.sub-menu');


//insert a button after each top level subnav
topSubnavs.forEach(sub => {
  sub.classList.add('top-level-subnav');
  const dropButton = document.createElement('button');
  dropButton.classList.add('sub-nav-toggle');
  sub.parentNode.insertBefore(dropButton, sub);
})

//add class to sub-subnav
const secondSubnavs = document.querySelectorAll('.top-level-subnav>.menu-item-has-children>.sub-menu');
secondSubnavs.forEach(sub => {
  sub.classList.add('second-level-subnav');
})

// click funtionality and proper tab direction behaviour

const menuItems = document.querySelectorAll(".main>.menu-item-has-children");
let expandedItem = null;

const expandSubMenu = (item) => {
	const subMenu = item.querySelector("ul");
	const button = item.querySelector("button");
	expandedItem = item;

	subMenu.setAttribute("aria-hidden","false");
	button.setAttribute("aria-expanded","true");
	item.dataset.expanded = "true";
};

const collapseSubMenu = (item) => {
	const subMenu = item.querySelector("ul");
	const button = item.querySelector("button");

	expandedItem = null;

	subMenu.setAttribute("aria-hidden","true");
	button.setAttribute("aria-expanded","false");
	item.dataset.expanded = "false";
};

menuItems.forEach((item) => {
	const button = item.querySelector("button");
	button.addEventListener("click", () => {
		if (button.ariaExpanded === "false") {
			expandSubMenu(item);
		} else {
			collapseSubMenu(item);
		}
	});

	item.addEventListener("mouseenter", () => {
		expandSubMenu(item);
	});
	item.addEventListener("mouseleave", () => {
		collapseSubMenu(item);
	});
});



document.addEventListener("keydown", (event) => {
	if (event.key === "Tab") {
		if (!expandedItem) {
			return;
		}
   
		const subMenu = expandedItem.querySelector(".second-level-subnav");
		const focusedElement = expandedItem.querySelector(":focus");
		const firstFocusableElement = expandedItem.querySelector("a");
		const lastFocusableElement = subMenu.lastElementChild.querySelector("a");
  

		if (!event.shiftKey && focusedElement === lastFocusableElement) {
			collapseSubMenu(expandedItem);
			return;
		}

		if (event.shiftKey && focusedElement === firstFocusableElement) {
			collapseSubMenu(expandedItem);
			return;
		}
	}

	if (event.key == "Escape") {
		collapseSubMenu(expandedItem);
	}
});

//check viewport width on resize
  let viewportWidth = window.innerWidth;

  function updateWindowWidth(){
    if(viewportWidth < 1000){
      navigation.classList.add('mobile-nav');
      navigation.classList.remove('desktop-nav');
    } else if (viewportWidth >= 1000) {
      navigation.classList.add('desktop-nav');
      navigation.classList.remove('mobile-nav');
    }
  }
  
  window.addEventListener("resize", updateWindowWidth);

  const mobileScreen = document.querySelector(".mobile-nav");
  const menuButton = document.querySelector(".js-menu-button");
  const navigation = document.querySelector(".js-navigation");
  const trapContainer = document.querySelector("header");
  
  const handleHamburgerClose = () => {
    navigation.setAttribute("aria-hidden", true);
    menuButton.setAttribute("aria-expanded", false);
    menuButton.setAttribute("aria-label", "Menu");
    // menuButton.lastElementChild.textContent = "Menu";
  
    if (mobileScreen){
      mobileScreen.style.overflowY = "scroll";
    } else {
      document.body.style.overflowY = "initial";
    }
  };



  //Focus trap

  
  function focusTrap(element, removeButton, handleClose) {


    
    const focusable =
      'button:not(#header-search, #searchsubmit2),  a:not(.skiplink, .btn--fat, .home-logo)';
    const focusableElements = element.querySelectorAll(focusable);

    const firstFocusableElement = focusableElements[0];
    const lastFocusableElement = focusableElements[focusableElements.length - 1];
    firstFocusableElement.focus();
  
    const shutdownFocusTrap = () => {
      handleClose();
      element.removeEventListener('keydown', handleKeydown);
      removeButton.removeEventListener('click', shutdownFocusTrap);
      removeButton.focus();
    };
  
    removeButton.addEventListener('click', shutdownFocusTrap);
    
    const handleKeydown = (event) => {
      const isEscPressed = (event.key === 'Escape');
      const isTabPressed = (event.key === 'Tab' || event.keyCode === 9);
      
  
      if ( isEscPressed ) {
        shutdownFocusTrap();
      }
      
      if ( !isTabPressed ) {
        return;
      }
      
      if ( event.shiftKey ) {
        if ( document.activeElement === firstFocusableElement ) {
          event.preventDefault();
          lastFocusableElement.focus();
        }
        return;
      }
      
      if ( document.activeElement === lastFocusableElement ) {
        event.preventDefault();
        firstFocusableElement.focus();
      }
    };
    
    element.addEventListener('keydown', handleKeydown);
  }
  
  //toggle mobile nav open using aria-labels connected to css

  const header = document.querySelector('header');
  menuButton.addEventListener("click", () => {
  const expanded = menuButton.getAttribute("aria-expanded");
  if (expanded === "false") {
    navigation.setAttribute("aria-hidden", false);
      menuButton.setAttribute("aria-expanded", true);
      menuButton.setAttribute("aria-label", "Close menu");
      // menuButton.lastElementChild.textContent = "Close";
      document.body.style.overflow = "hidden";

      header.style.position = "relative";
      focusTrap(trapContainer, menuButton, handleHamburgerClose);
      if (mobileScreen){
        mobileScreen.style.overflow = "hidden";

      } else {
        document.body.style.overflow = "hidden";
        document.body.style.height = "100vh";
      
      }
  } else {
    navigation.setAttribute("aria-hidden", true);
    menuButton.setAttribute("aria-expanded", false);
    menuButton.setAttribute("aria-label", "Open menu");
    // menuButton.lastElementChild.textContent = "Menu";
    document.body.style.overflowY = "initial";
    document.body.style.height = "100%";
    header.style.position = "relative";
  }
  });






});




