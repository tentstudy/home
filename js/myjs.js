function sliderJS(uItems, uItemsDesktop, uItemsDesktopSmall, uItemsTablet, uItemsMobile) {
  // ______________ SLIDERS
  var sync1 = $("#mainslider");
  var sync2 = $("#mainslider-nav");

  sync1.owlCarousel({
    singleItem: true,
    slideSpeed: 1000,
    paginationSpeed: 800,
    navigation: false,
    pagination: false,
    autoPlay: 5000,
    afterAction: syncPosition,
    responsiveRefreshRate: 200,
  });

  sync2.owlCarousel({
    items: uItems,
    itemsDesktop: [1199, uItemsDesktop],
    itemsDesktopSmall: [979, uItemsDesktopSmall],
    itemsTablet: [768, uItemsTablet],
    itemsMobile: [479, uItemsMobile],
    pagination: false,
    responsiveRefreshRate: 100,
    afterInit: function (el) {
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });

  function syncPosition(el) {
    var current = this.currentItem;
    $("#mainslider-nav")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced");
    if ($("#mainslider-nav").data("owlCarousel") !== undefined) {
      center(current);
    }
  }

  $("#mainslider-nav").on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo", number);
  });

  function center(number) {
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for (var i in sync2visible) {
      if (num === sync2visible[i]) {
        var found = true;
      }
    }

    if (found === false) {
      if (num > sync2visible[sync2visible.length - 1]) {
        sync2.trigger("owl.goTo", num - sync2visible.length + 2)
      } else {
        if (num - 1 === -1) {
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if (num === sync2visible[sync2visible.length - 1]) {
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if (num === sync2visible[0]) {
      sync2.trigger("owl.goTo", num - 1)
    }
  }
}