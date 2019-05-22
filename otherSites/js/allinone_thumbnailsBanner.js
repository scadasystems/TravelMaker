/*
 * AllInOne Banner - Banner With Thumbnails v3.5
 *
 * Copyright 2012-2017, LambertGroup
 *
 */


(function (e) {
    function O(a, b, d) {
        d.responsive && (newCss = "", -1 != a.css("font-size").lastIndexOf("px") ? (fontSize = a.css("font-size").substr(0, a.css("font-size").lastIndexOf("px")), newCss += "font-size:" + fontSize / (d.origWidth / d.width) + "px;") : -1 != a.css("font-size").lastIndexOf("em") && (fontSize = a.css("font-size").substr(0, a.css("font-size").lastIndexOf("em")), newCss += "font-size:" + fontSize / (d.origWidth / d.width) + "em;"), -1 != a.css("line-height").lastIndexOf("px") ? (lineHeight = a.css("line-height").substr(0, a.css("line-height").lastIndexOf("px")),
            newCss += "line-height:" + lineHeight / (d.origWidth / d.width) + "px;") : -1 != a.css("line-height").lastIndexOf("em") && (lineHeight = a.css("line-height").substr(0, a.css("line-height").lastIndexOf("em")), newCss += "line-height:" + lineHeight / (d.origWidth / d.width) + "em;"), a.wrapInner('<div class="newFS" style="' + newCss + '" />'));
        var h = a.attr("data-final-left"),
            f = a.attr("data-final-top");
        d.responsive && (h = parseInt(h / (d.origWidth / d.width), 10), f = parseInt(f / (d.origWidth / d.width), 10));
        d = 1;
        1 == b.isVideoPlaying && (d = 0);
        a.animate({
            opacity: d,
            left: h + "px",
            top: f + "px"
        }, 1E3 * a.attr("data-duration"), function () {
            1 == b.isVideoPlaying && e(b.currentImg.attr("data-text-id")).children().css("opacity", 0)
        })
    }

    function J(a, b, d, h) {
        e(a.currentImg.attr("data-text-id")).css("display", "block");
        d = e(a.currentImg.attr("data-text-id")).children();
        var f = 0;
        currentText_arr = [];
        d.each(function () {
            currentText_arr[f] = e(this);
            var d = currentText_arr[f].attr("data-initial-left"),
                h = currentText_arr[f].attr("data-initial-top");
            b.responsive && (d = parseInt(d / (b.origWidth / b.width), 10),
                h = parseInt(h / (b.origWidth / b.width), 10));
            currentText_arr[f].css({
                left: d + "px",
                top: h + "px",
                opacity: parseInt(currentText_arr[f].attr("data-fade-start"), 10) / 100
            });
            var m = currentText_arr[f];
            setTimeout(function () {
                O(m, a, b)
            }, 1E3 * currentText_arr[f].attr("data-delay"));
            f++
        })
    }

    function P(a) {
        for (var b, d, e = a.length; e; b = parseInt(Math.random() * e, 10), d = a[--e], a[e] = a[b], a[b] = d);
        return a
    }

    function K(a, b) {
        nowx = (new Date).getTime();
        a.mouseOverBanner || a.effectIsRunning || !b.showCircleTimer || (a.ctx.clearRect(0, 0, a.canvas.width,
                a.canvas.height), a.ctx.beginPath(), a.ctx.globalAlpha = b.behindCircleAlpha / 100, a.ctx.arc(b.circleRadius + 2 * b.circleLineWidth, b.circleRadius + 2 * b.circleLineWidth, b.circleRadius, 0, 2 * Math.PI, !1), a.ctx.lineWidth = b.circleLineWidth + 2, a.ctx.strokeStyle = b.behindCircleColor, a.ctx.stroke(), a.ctx.beginPath(), a.ctx.globalAlpha = b.circleAlpha / 100, a.ctx.arc(b.circleRadius + 2 * b.circleLineWidth, b.circleRadius + 2 * b.circleLineWidth, b.circleRadius, 0, (a.timeElapsed + nowx - a.arcInitialTime) / 1E3 * 2 / b.autoPlay * Math.PI, !1), a.ctx.lineWidth =
            b.circleLineWidth, a.ctx.strokeStyle = b.circleColor, a.ctx.stroke())
    }

    function L(a, b, d) {
        var h = F();
        e(".stripe", a).remove();
        e(".block", a).remove();
        z = A = Math.round(b.width / b.numberOfStripes);
        for (var f = !0, u = 0; u < b.numberOfStripes; u++) u == b.numberOfStripes - 1 && (z = a.width() - A * (b.numberOfStripes - 1)), !b.responsive || -1 == h || -1 != h && 9 <= h ? -1 != y.indexOf("ipad") || -1 != y.indexOf("iphone") || -1 != y.indexOf("ipod") || -1 != y.indexOf("webos") ? f = !1 : a.append(e('<div class="stripe"></div>').css({
            opacity: "0",
            left: A * u + "px",
            width: z + "px",
            height: "0px",
            background: 'url("' + d.current_imgInside.attr("src") + '") ' + -1 * u * A + "px 0%"
        })) : f = !1, f || (mleft = -1 * A * u, a.append(e('<div class="stripe"><img src="' + d.current_imgInside.attr("src") + '" width="' + b.width + '" height="' + b.height + '" style="margin-left:' + mleft + 'px;"></div>').css({
            opacity: "0",
            left: A * u + "px",
            width: z + "px",
            height: "0px"
        })));
        b.responsive && f && (-1 == h || -1 != h && 9 <= h) && e(".stripe", a).css({
            "-webkit-background-size": b.width + "px " + b.height + "px",
            "-moz-background-size": b.width + "px " + b.height + "px",
            "-o-background-size": b.width +
                "px " + b.height + "px",
            "-ms-background-size": b.width + "px " + b.height + "px",
            "background-size": b.width + "px " + b.height + "px"
        })
    }

    function Q(a, b, d) {
        var h = F();
        e(".stripe", a).remove();
        e(".block", a).remove();
        for (var f = Math.round(b.width / b.numberOfColumns), u = Math.round(b.height / b.numberOfRows), r, m, x, g, l = !0, p = 0; p < b.numberOfRows; p++)
            for (var n = 0; n < b.numberOfColumns; n++) x = f * n, g = u * p, r = n == b.numberOfColumns - 1 ? b.width - f * (b.numberOfColumns - 1) : f, m = p == b.numberOfRows - 1 ? b.height - u * (b.numberOfRows - 1) : u, !b.responsive || -1 == h || -1 !=
                h && 9 <= h ? -1 != y.indexOf("ipad") || -1 != y.indexOf("iphone") || -1 != y.indexOf("ipod") || -1 != y.indexOf("webos") ? l = !1 : a.append(e('<div class="block"></div>').css({
                    opacity: "0",
                    left: x + "px",
                    top: g + "px",
                    width: r + "px",
                    height: m + "px",
                    background: 'url("' + d.current_imgInside.attr("src") + '") -' + x + "px -" + g + "px"
                })) : l = !1, l || (mleft = -1 * x, mtop = -1 * g, a.append(e('<div class="block"><img src="' + d.current_imgInside.attr("src") + '" width="' + b.width + '" height="' + b.height + '" style="margin-left:' + mleft + "px; margin-top:" + mtop + 'px;"></div>').css({
                    opacity: "0",
                    left: x + "px",
                    top: g + "px",
                    width: r + "px",
                    height: m + "px"
                })));
        b.responsive && l && (-1 == h || -1 != h && 9 <= h) && e(".block", a).css({
            "-webkit-background-size": b.width + "px " + b.height + "px",
            "-moz-background-size": b.width + "px " + b.height + "px",
            "-o-background-size": b.width + "px " + b.height + "px",
            "-ms-background-size": b.width + "px " + b.height + "px",
            "background-size": b.width + "px " + b.height + "px"
        })
    }

    function I(a, b, e, h, f) {
        var d = a.width(),
            r = a.height();
        a.css({
            width: "0"
        });
        a.css({
            height: "0"
        });
        b == h.numberOfRows - 1 && e == h.numberOfColumns - 1 ? setTimeout(function () {
            a.animate({
                opacity: "1.0",
                width: d,
                height: r
            }, 1E3 * h.effectDuration / 3, "", function () {
                f.trigger("effectComplete")
            })
        }, v) : setTimeout(function () {
            a.animate({
                opacity: "1.0",
                width: d,
                height: r
            }, 1E3 * h.effectDuration / 3)
        }, v);
        v += 25
    }

    function G(a, b, e, h, f, u, r, m) {
        C = b.css("left").substr(0, b.css("left").lastIndexOf("px"));
        1 === a || -1 === a ? (m.isCarouselScrolling = !0, b.css("opacity", "0.5"), b.animate({
                opacity: 1,
                left: "+=" + a * m.carouselStep
            }, 500, "easeOutCubic", function () {
                M(m, b, e, h, f, u, r);
                m.isCarouselScrolling = !1
            })) : C != -1 * Math.floor(m.current_img_no / f.numberOfThumbsPerScreen) *
            m.carouselStep && (m.isCarouselScrolling = !0, b.css("opacity", "0.5"), b.animate({
                opacity: 1,
                left: -1 * Math.floor(m.current_img_no / f.numberOfThumbsPerScreen) * m.carouselStep
            }, 500, "easeOutCubic", function () {
                M(m, b, e, h, f, u, r);
                m.isCarouselScrolling = !1
            }))
    }

    function M(a, b, e, h, f, u, r) {
        C = b.css("left").substr(0, b.css("left").lastIndexOf("px"));
        0 > C ? e.hasClass("carouselLeftNavDisabled") && e.removeClass("carouselLeftNavDisabled") : e.addClass("carouselLeftNavDisabled");
        Math.abs(C - a.carouselStep) < (r.width() + a.thumbMarginLeft) *
            u ? h.hasClass("carouselRightNavDisabled") && h.removeClass("carouselRightNavDisabled") : h.addClass("carouselRightNavDisabled")
    }

    function E(a, b, d, h, f, u, r, m, x, g, l, p) {
        var n = !0;
        if (!g.loop && b.current_img_no + a >= l || !g.loop && 0 > b.current_img_no + a) n = !1;
        if (n) {
            e(".newFS", h).contents().unwrap();
            b.arcInitialTime = (new Date).getTime();
            b.timeElapsed = 0;
            g.showCircleTimer && (b.ctx.clearRect(0, 0, b.canvas.width, b.canvas.height), b.ctx.beginPath(), b.ctx.globalAlpha = g.behindCircleAlpha / 100, b.ctx.arc(g.circleRadius + 2 * g.circleLineWidth,
                g.circleRadius + 2 * g.circleLineWidth, g.circleRadius, 0, 2 * Math.PI, !1), b.ctx.lineWidth = g.circleLineWidth + 2, b.ctx.strokeStyle = g.behindCircleColor, b.ctx.stroke(), b.ctx.beginPath(), b.ctx.globalAlpha = g.circleAlpha / 100, b.ctx.arc(g.circleRadius + 2 * g.circleLineWidth, g.circleRadius + 2 * g.circleLineWidth, g.circleRadius, 0, 0, !1), b.ctx.lineWidth = g.circleLineWidth, b.ctx.strokeStyle = g.circleColor, b.ctx.stroke());
            e(b.currentImg.attr("data-text-id")).css("display", "none");
            e(f[b.current_img_no]).removeClass("thumbsHolder_ThumbON");
            g.randomizeImages && !b.bottomNavClicked ? (n = Math.floor(Math.random() * l), b.current_img_no = b.current_img_no === n ? Math.floor(Math.random() * l) : n) : b.current_img_no = b.current_img_no + a >= l ? 0 : 0 > b.current_img_no + a ? l - 1 : b.current_img_no + a;
            b.bottomNavClicked = !1;
            e(f[b.current_img_no]).addClass("thumbsHolder_ThumbON");
            C = r.css("left").substr(0, r.css("left").lastIndexOf("px"));
            0 === b.current_img_no || b.current_img_no === l - 1 ? G(0, r, m, x, g, l, p, b) : G(1001, r, m, x, g, l, p, b);
            b.currentImg = e(u[b.current_img_no]);
            b.current_imgInside =
                b.currentImg.find("img:first");
            b.currentImg.attr("data-transition") ? (d = b.currentImg.attr("data-transition"), "random" == d && (d = H[Math.floor(Math.random() * H.length)])) : d = "random" != g.defaultEffect ? g.defaultEffect : H[Math.floor(Math.random() * H.length)];
            "alternateSlide" == d && (d = 1 === a ? "slideFromRight" : "slideFromLeft");
            b.effectIsRunning = !0;
            if ("fade" == d || "slideFromLeft" == d || "slideFromRight" == d || "slideFromTop" == d || "slideFromBottom" == d) L(h, g, b), a = e(".stripe:first", h), "fade" == d && (a.css({
                    top: "0px",
                    height: "100%",
                    width: h.width() + "px"
                }), a.animate({
                    opacity: "1.0"
                }, 2E3 * g.effectDuration, "", function () {
                    h.trigger("effectComplete")
                })), "slideFromLeft" == d && (a.css({
                    top: "0px",
                    height: "100%",
                    width: "0"
                }), a.animate({
                    opacity: "1.0",
                    width: h.width() + "px"
                }, 1E3 * g.effectDuration, "", function () {
                    h.trigger("effectComplete")
                })), "slideFromRight" == d && (a.css({
                    top: "0px",
                    height: "100%",
                    width: "0",
                    left: h.width() + 5 + "px"
                }), a.animate({
                    opacity: "1.0",
                    left: "0",
                    width: h.width() + "px"
                }, 1E3 * g.effectDuration, "", function () {
                    h.trigger("effectComplete")
                })),
                "slideFromTop" == d && (a.css({
                    top: "0px",
                    height: "0",
                    width: h.width() + "px"
                }), a.animate({
                    opacity: "1.0",
                    height: h.height() + "px"
                }, 1E3 * g.effectDuration, "", function () {
                    h.trigger("effectComplete")
                })), "slideFromBottom" == d && (a.css({
                    height: "0",
                    width: h.width() + "px",
                    top: h.height() + "px"
                }), a.animate({
                    opacity: "1.0",
                    top: 0,
                    height: h.height() + "px"
                }, 1E3 * g.effectDuration, "", function () {
                    h.trigger("effectComplete")
                }));
            0 <= d.indexOf("Stripes") && (L(h, g, b), a = 0 <= d.indexOf("Reverse") ? e(".stripe", h).myReverse() : e(".stripe", h), v = 100, i =
                0, a.each(function () {
                    var a = e(this);
                    "topBottomDroppingStripes" != d && "topBottomDroppingReverseStripes" != d || a.css({
                        top: "0px"
                    });
                    "bottomTopDroppingStripes" != d && "bottomTopDroppingReverseStripes" != d || a.css({
                        bottom: "0px"
                    });
                    "leftRightFadingStripes" != d && "leftRightFadingReverseStripes" != d || a.css({
                        top: "0px",
                        height: "100%",
                        width: "0"
                    });
                    "asynchronousDroppingStripes" == d && (i % 2 ? a.css({
                        top: "0px"
                    }) : a.css({
                        bottom: "0px"
                    }));
                    if ("leftRightFadingStripes" == d || "leftRightFadingReverseStripes" == d) {
                        var b = A;
                        if ("leftRightFadingStripes" ==
                            d && i == g.numberOfStripes - 1 || "leftRightFadingReverseStripes" == d && 0 == i) b = z;
                        i == g.numberOfStripes - 1 ? setTimeout(function () {
                            a.animate({
                                width: b + "px",
                                opacity: "1.0"
                            }, 800 * g.effectDuration, "", function () {
                                h.trigger("effectComplete")
                            })
                        }, v) : setTimeout(function () {
                            a.animate({
                                width: b + "px",
                                opacity: "1.0"
                            }, 800 * g.effectDuration)
                        }, v)
                    } else i == g.numberOfStripes - 1 ? setTimeout(function () {
                        a.animate({
                            height: "100%",
                            opacity: "1.0"
                        }, 1E3 * g.effectDuration, "", function () {
                            h.trigger("effectComplete")
                        })
                    }, v) : setTimeout(function () {
                        a.animate({
                            height: "100%",
                            opacity: "1.0"
                        }, 1E3 * g.effectDuration)
                    }, v);
                    v += 50;
                    i++
                }));
            if (0 <= d.indexOf("Blocks"))
                if (Q(h, g, b), b = 0 <= d.indexOf("Reverse") ? e(".block", h).myReverse() : "randomBlocks" == d ? P(e(".block", h)) : e(".block", h), v = 100, "randomBlocks" == d) {
                    i = 0;
                    var y = g.numberOfRows * g.numberOfColumns;
                    b.each(function () {
                        var a = e(this),
                            b = a.width(),
                            c = a.height();
                        a.css({
                            width: "0"
                        });
                        a.css({
                            height: "0"
                        });
                        i == y - 1 ? setTimeout(function () {
                            a.animate({
                                opacity: "1.0",
                                width: b,
                                height: c
                            }, 1E3 * g.effectDuration / 3, "", function () {
                                h.trigger("effectComplete")
                            })
                        }, v) : setTimeout(function () {
                            a.animate({
                                opacity: "1.0",
                                width: b,
                                height: c
                            }, 1E3 * g.effectDuration / 3)
                        }, v);
                        v += 25;
                        i++
                    })
                } else {
                    var k = 0,
                        c = 0,
                        w = [];
                    w[k] = [];
                    b.each(function () {
                        w[k][c] = e(this);
                        c++;
                        c == g.numberOfColumns && (k++, c = 0, w[k] = [])
                    });
                    c = k = 0;
                    v = 100;
                    b = e(w[k][c]);
                    for (I(b, 0, 0, g, h); k < g.numberOfRows - 1 || c < g.numberOfColumns - 1;)
                        for (k < g.numberOfRows - 1 && k++, c < g.numberOfColumns - 1 && c++, i = k, c < k && g.numberOfRows > g.numberOfColumns && (i = k - c), j = 0, k < c && g.numberOfRows < g.numberOfColumns && (j = c - k); 0 <= i && j <= c;) b = e(w[i--][j++]), I(b, i, j, g, h);
                    v = g.numberOfRows < g.numberOfColumns ? v - 25 * (g.numberOfRows -
                        1) : v - 25 * (g.numberOfColumns - 1);
                    limit_i = 0;
                    for (limit_j = c - k; limit_i < k && limit_j < c;) {
                        i = k + 1;
                        for (j = limit_j; i > limit_i && j < c;) --i, j += 1, b = e(w[i][j]), I(b, i, j, g, h);
                        limit_i++;
                        limit_j++
                    }
                }
        }
    }

    function N(a, b, d, h, f, u, r, m, x, g, l) {
        "opportune" != b.skin && (l.css({
                top: b.height + "px",
                "margin-top": parseInt(b.thumbsWrapperMarginTop / (b.origWidth / b.width), 10) + "px",
                height: parseInt(b.origthumbsHolderWrapperH / (b.origWidth / b.width), 10) + "px"
            }), bgTopCorrection = 0, 1 == b.origWidth / b.width && 0 < b.thumbsReflection && (bgTopCorrection = -7), r.css("background-position",
                "0px " + ((l.height() - b.origthumbsHolderWrapperH) / 2 + bgTopCorrection) + "px"), m.css("background-position", "0px " + ((l.height() - b.origthumbsHolderWrapperH) / 2 + bgTopCorrection) + "px"), g.css("width", b.width - r.width() - m.width()), b.origWidthThumbsHolderVisibleWrapper = b.origWidth - r.width() - m.width(), f.css({
                width: parseInt(b.origThumbW / (b.origWidthThumbsHolderVisibleWrapper / g.width()), 10) + "px",
                height: parseInt(b.origThumbH / (b.origWidthThumbsHolderVisibleWrapper / g.width()), 10) + "px"
            }), b.numberOfThumbsPerScreen >= d &&
            g.css("left", parseInt((l.width() - (x.width() + a.thumbMarginLeft) * d) / 2, 10) + parseInt(a.thumbMarginLeft / 2, 10) + "px"), d = e(".thumbsHolder_ThumbOFF", h).find("img:first"), 0 < b.thumbsReflection && d.unreflect(), d.css({
                width: f.width() + "px",
                height: f.height() + "px",
                "margin-top": parseInt((l.height() - f.height()) / 2, 10) + bgTopCorrection + "px"
            }), 1 == b.origWidth / b.width && 0 < b.thumbsReflection && d.reflect({
                opacity: b.thumbsReflection / 100
            }), a.thumbMarginLeft = Math.floor((l.width() - r.width() - m.width() - x.width() * b.numberOfThumbsPerScreen) /
                (b.numberOfThumbsPerScreen - 1)), thumb_i = -1, u.children().each(function () {
                thumb_i++;
                theThumb = e(this);
                theThumb.css("background-position", "center " + b.thumbsOnMarginTop / (b.origWidth / b.width) + "px");
                0 >= thumb_i ? theThumb.css("margin-left", Math.floor((l.width() - r.width() - m.width() - (a.thumbMarginLeft + theThumb.width()) * (b.numberOfThumbsPerScreen - 1) - theThumb.width()) / 2) + "px") : theThumb.css("margin-left", a.thumbMarginLeft + "px")
            }), a.carouselStep = (x.width() + a.thumbMarginLeft) * b.numberOfThumbsPerScreen)
    }

    function F() {
        var a = -1;
        "Microsoft Internet Explorer" == navigator.appName && null != /MSIE ([0-9]{1,}[.0-9]{0,})/.exec(navigator.userAgent) && (a = parseFloat(RegExp.$1));
        return parseInt(a, 10)
    }
    var H = "fade slideFromLeft slideFromRight slideFromTop slideFromBottom topBottomDroppingStripes topBottomDroppingReverseStripes bottomTopDroppingStripes bottomTopDroppingReverseStripes asynchronousDroppingStripes leftRightFadingStripes leftRightFadingReverseStripes topBottomDiagonalBlocks topBottomDiagonalReverseBlocks alternateSlide randomBlocks".split(" "),
        A, z, v = 100,
        D = !1,
        C = 0,
        y = navigator.userAgent.toLowerCase();
    e.fn.allinone_thumbnailsBanner = function (a) {
        a = e.extend({}, e.fn.allinone_thumbnailsBanner.defaults, a);
        return this.each(function () {
            var b = e(this);
            responsiveWidth = b.parent().width();
            responsiveHeight = b.parent().height();
            a.responsiveRelativeToBrowser && (responsiveWidth = e(window).width(), responsiveHeight = e(window).height());
            a.origWidth = a.width;
            a.width100Proc && (a.width = responsiveWidth);
            a.origHeight = a.height;
            a.height100Proc && (a.height = responsiveHeight);
            a.responsive && (a.origWidth != responsiveWidth || a.width100Proc) && (a.width = a.origWidth > responsiveWidth || a.width100Proc ? responsiveWidth : a.origWidth, a.height100Proc || (a.height = a.width / (a.origWidth / a.origHeight)));
            a.width = parseInt(a.width, 10);
            a.height = parseInt(a.height, 10);
            b.css("display", "block");
            var d = e("<div></div>").addClass("allinone_thumbnailsBanner").addClass(a.skin),
                h = e('<div class="bannerControls">   <div class="leftNav"></div>   <div class="rightNav"></div>      </div>  <div class="contentHolderVisibleWrapper"><div class="contentHolder"></div></div>   <div class="thumbsHolderWrapper"><div class="thumbsHolderVisibleWrapper"><div class="thumbsHolder"></div></div></div> <canvas class="mycanvas"></canvas>');
            b.wrap(d);
            b.after(h);
            a.showAllControllers || u.css("display", "none");
            var f = b.parent(".allinone_thumbnailsBanner"),
                u = e(".bannerControls", f),
                r = e(".leftNav", f),
                m = e(".rightNav", f);
            r.css("display", "none");
            m.css("display", "none");
            a.showNavArrows && a.showOnInitNavArrows && (r.css("display", "block"), m.css("display", "block"));
            var x = e(".thumbsHolderWrapper", f),
                g = e(".thumbsHolderVisibleWrapper", f),
                l = e(".thumbsHolder", f);
            var p = e('<div class="carouselLeftNav"></div>');
            var n = e('<div class="carouselRightNav"></div>');
            x.append(p);
            x.append(n);
            n.css("right", "0");
            l.css("width", p.width() + "px");
            a.showThumbs && a.showOnInitThumbs || x.css("display", "none");
            var d = F(),
                v = a.defaultEffect,
                k = 0,
                c = {
                    current_img_no: 0,
                    currentImg: 0,
                    current_imgInside: "",
                    windowWidth: 0,
                    carouselStep: 0,
                    thumbMarginLeft: 0,
                    bottomNavClicked: !1,
                    effectIsRunning: !1,
                    mouseOverBanner: !1,
                    timeoutID: "",
                    intervalID: "",
                    arcInitialTime: (new Date).getTime(),
                    timeElapsed: 0,
                    canvas: "",
                    ctx: "",
                    bannerRatio: a.origWidth / a.origHeight
                };
            c.canvas = e(".mycanvas", f)[0];
            c.canvas.width = 2 * a.circleRadius +
                4 * a.circleLineWidth;
            c.canvas.height = 2 * a.circleRadius + 4 * a.circleLineWidth; - 1 != d && 9 > d && (a.showCircleTimer = !1);
            a.showCircleTimer && (c.ctx = c.canvas.getContext("2d"));
            f.width(a.width);
            f.height(a.height);
            u.css("margin-top", parseInt((a.height - r.height()) / 2, 10) + "px");
            var w = b.find("ul:first").children(),
                t, A = 0;
            w.each(function () {
                c.currentImg = e(this);
                c.currentImg.is("li") || (c.currentImg = c.currentImg.find("li:first"));
                if (c.currentImg.is("li")) {
                    c.currentImg.css("display", "none");
                    k++;
                    var b = e(w[k - 1]).attr("data-bottom-thumb");
                    t = e('<div class="thumbsHolder_ThumbOFF" rel="' + (k - 1) + '"><img src="' + b + '"></div>');
                    l.append(t);
                    0 == a.origThumbW && (0 == a.numberOfThumbsPerScreen && (a.numberOfThumbsPerScreen = Math.floor((a.origWidth - p.width() - n.width()) / t.width())), a.origThumbW = t.width(), a.origThumbH = t.height(), a.origthumbsHolderWrapperH = x.height(), c.thumbMarginLeft = Math.floor((a.origWidth - p.width() - n.width() - t.width() * a.numberOfThumbsPerScreen) / (a.numberOfThumbsPerScreen - 1)));
                    l.css("width", l.width() + c.thumbMarginLeft + t.width() + "px");
                    1 >=
                        k ? t.css("margin-left", Math.floor((x.width() - p.width() - n.width() - (c.thumbMarginLeft + t.width()) * (a.numberOfThumbsPerScreen - 1) - t.width()) / 2) + "px") : t.css("margin-left", c.thumbMarginLeft + "px");
                    A = parseInt((x.height() - parseInt(t.css("height").substring(0, t.css("height").length - 2))) / 2, 10)
                }
            });
            g.css("width", g.width() - p.width() - n.width());
            g.css("left", p.width());
            c.carouselStep = (t.width() + c.thumbMarginLeft) * a.numberOfThumbsPerScreen;
            0 === Math.floor(c.current_img_no / a.numberOfThumbsPerScreen) && p.addClass("carouselLeftNavDisabled");
            Math.floor(c.current_img_no / a.numberOfThumbsPerScreen) == Math.floor(k / a.numberOfThumbsPerScreen) && n.addClass("carouselRightNavDisabled");
            0 < a.thumbsReflection && (A -= 7);
            h = e(".thumbsHolder_ThumbOFF", f).find("img:first");
            h.css("margin-top", A + "px");
            g.css({
                width: a.origWidth - p.width() - n.width(),
                left: p.width() + "px"
            });
            c.carouselStep = (t.width() + c.thumbMarginLeft) * a.numberOfThumbsPerScreen;
            p.addClass("carouselLeftNavDisabled");
            a.numberOfThumbsPerScreen >= k && (n.addClass("carouselRightNavDisabled"), p.css("display",
                "none"), n.css("display", "none"), g.css("left", parseInt((x.width() - (t.width() + c.thumbMarginLeft) * k) / 2, 10) + "px"));
            x.css("top", a.height + "px");
            h = e(".thumbsHolder_ThumbOFF", f).find("img:first");
            h.css("margin-top", A + "px");
            a.origthumbsHolder_MarginTop = A;
            var B = e(".thumbsHolder_ThumbOFF", f);
            N(c, a, k, f, B, l, p, n, t, g, x);
            c.current_img_no = a.firstImg;
            a.firstImg > k && (c.current_img_no = k);
            0 > a.firstImg && (c.current_img_no = 0);
            a.randomizeImages && (c.current_img_no = Math.floor(Math.random() * k));
            if (c.current_img_no >= a.numberOfThumbsPerScreen)
                for (q =
                    0; q < Math.floor(c.current_img_no / a.numberOfThumbsPerScreen); q++) G(-1, l, p, n, a, k, t, c);
            c.currentImg = e(w[c.current_img_no]);
            c.current_imgInside = c.currentImg.find("img:first"); - 1 != y.indexOf("ipad") || -1 != y.indexOf("iphone") || -1 != y.indexOf("ipod") || -1 != y.indexOf("webos") || -1 != d && 7 >= d ? f.append('<img id="curBgImgIos" src="' + c.current_imgInside.attr("src") + '" width="' + a.width + '" height="' + a.height + '">') : (f.css("background", 'url("' + c.current_imgInside.attr("src") + '") no-repeat'), a.responsive && (-1 == d || -1 != d &&
                9 <= d ? f.css({
                    "-webkit-background-size": a.width + "px " + a.height + "px",
                    "-moz-background-size": a.width + "px " + a.height + "px",
                    "-o-background-size": a.width + "px " + a.height + "px",
                    "-ms-background-size": a.width + "px " + a.height + "px",
                    "background-size": a.width + "px " + a.height + "px"
                }) : 8 == d && f.css({
                    filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + c.current_imgInside.attr("src") + "',sizingMethod='scale')"
                })));
            a.enableTouchScreen && f.swipe({
                swipe: function (b, e, d, g, h) {
                    c.effectIsRunning || E("right" == e ? -1 : 1, c, v,
                        f, B, w, l, p, n, a, k, t)
                }
            });
            J(c, a, b, u);
            f.bind("effectComplete", function () {
                var d = F();
                c.effectIsRunning = !1; - 1 != y.indexOf("ipad") || -1 != y.indexOf("iphone") || -1 != y.indexOf("ipod") || -1 != y.indexOf("webos") || -1 != d && 7 >= d ? (e("#curBgImgIos", f).attr("src", c.current_imgInside.attr("src")), e("#curBgImgIos", f).width(a.width), e("#curBgImgIos", f).height(a.height)) : (f.css("background", 'url("' + c.current_imgInside.attr("src") + '") no-repeat'), a.responsive && (-1 == d || -1 != d && 9 <= d ? f.css({
                    "-webkit-background-size": a.width + "px " +
                        a.height + "px",
                    "-moz-background-size": a.width + "px " + a.height + "px",
                    "-o-background-size": a.width + "px " + a.height + "px",
                    "-ms-background-size": a.width + "px " + a.height + "px",
                    "background-size": a.width + "px " + a.height + "px"
                }) : 8 == d && f.css({
                    filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + c.current_imgInside.attr("src") + "',sizingMethod='scale')"
                })));
                c.arcInitialTime = (new Date).getTime();
                c.timeElapsed = 0;
                a.showCircleTimer && (clearInterval(c.intervalID), c.ctx.clearRect(0, 0, c.canvas.width, c.canvas.height),
                    c.ctx.beginPath(), c.ctx.globalAlpha = a.behindCircleAlpha / 100, c.ctx.arc(a.circleRadius + 2 * a.circleLineWidth, a.circleRadius + 2 * a.circleLineWidth, a.circleRadius, 0, 2 * Math.PI, !1), c.ctx.lineWidth = a.circleLineWidth + 2, c.ctx.strokeStyle = a.behindCircleColor, c.ctx.stroke(), c.ctx.beginPath(), c.ctx.globalAlpha = a.circleAlpha / 100, c.ctx.arc(a.circleRadius + 2 * a.circleLineWidth, a.circleRadius + 2 * a.circleLineWidth, a.circleRadius, 0, 0, !1), c.ctx.lineWidth = a.circleLineWidth, c.ctx.strokeStyle = a.circleColor, c.ctx.stroke(), c.intervalID =
                    setInterval(function () {
                        K(c, a)
                    }, 125));
                J(c, a, b, u);
                0 < a.autoPlay && 1 < k && !c.mouseOverBanner && (clearTimeout(c.timeoutID), c.timeoutID = setTimeout(function () {
                    E(1, c, v, f, B, w, l, p, n, a, k, t)
                }, 1E3 * a.autoPlay))
            });
            f.mouseenter(function () {
                c.mouseOverBanner = !0;
                clearTimeout(c.timeoutID);
                nowx = (new Date).getTime();
                c.timeElapsed += nowx - c.arcInitialTime;
                a.autoHideNavArrows && a.showNavArrows && (r.css("display", "block"), m.css("display", "block"));
                a.autoHideThumbs && a.showThumbs && x.css("display", "block")
            });
            f.mouseleave(function () {
                c.mouseOverBanner = !1;
                nowx = (new Date).getTime();
                a.autoHideNavArrows && a.showNavArrows && (r.css("display", "none"), m.css("display", "none"));
                a.autoHideThumbs && a.showThumbs && x.css("display", "none");
                if (0 < a.autoPlay && 1 < k) {
                    clearTimeout(c.timeoutID);
                    c.arcInitialTime = (new Date).getTime();
                    var b = parseInt(1E3 * a.autoPlay - (c.timeElapsed + nowx - c.arcInitialTime), 10);
                    c.timeoutID = setTimeout(function () {
                        E(1, c, v, f, B, w, l, p, n, a, k, t)
                    }, b)
                }
            });
            f.click(function () {
                if (void 0 != e(w[c.current_img_no]).attr("data-link") && "" != e(w[c.current_img_no]).attr("data-link") &&
                    !c.effectIsRunning && !D) {
                    var b = a.target;
                    void 0 != e(w[c.current_img_no]).attr("data-target") && "" != e(w[c.current_img_no]).attr("data-target") && (b = e(w[c.current_img_no]).attr("data-target"));
                    "_blank" == b ? window.open(e(w[c.current_img_no]).attr("data-link")) : window.location = e(w[c.current_img_no]).attr("data-link")
                }
            });
            r.click(function () {
                D = !0;
                c.effectIsRunning || (clearTimeout(c.timeoutID), E(-1, c, v, f, B, w, l, p, n, a, k, t))
            });
            r.mouseout(function () {
                D = !1
            });
            m.click(function () {
                D = !0;
                c.effectIsRunning || (clearTimeout(c.timeoutID),
                    E(1, c, v, f, B, w, l, p, n, a, k, t))
            });
            m.mouseout(function () {
                D = !1
            });
            var z = !1;
            e(window).resize(function () {
                var d = F();
                doResizeNow = !0; - 1 != navigator.userAgent.indexOf("Android") && (0 == a.windowOrientationScreenSize0 && 0 == window.orientation && (a.windowOrientationScreenSize0 = e(window).width()), 0 == a.windowOrientationScreenSize90 && 90 == window.orientation && (a.windowOrientationScreenSize90 = e(window).height()), 0 == a.windowOrientationScreenSize_90 && -90 == window.orientation && (a.windowOrientationScreenSize_90 = e(window).height()),
                    a.windowOrientationScreenSize0 && 0 == window.orientation && e(window).width() > a.windowOrientationScreenSize0 && (doResizeNow = !1), a.windowOrientationScreenSize90 && 90 == window.orientation && e(window).height() > a.windowOrientationScreenSize90 && (doResizeNow = !1), a.windowOrientationScreenSize_90 && -90 == window.orientation && e(window).height() > a.windowOrientationScreenSize_90 && (doResizeNow = !1), 0 == c.windowWidth && (doResizeNow = !1, c.windowWidth = e(window).width())); - 1 != d && 9 == d && 0 == c.windowWidth && (doResizeNow = !1);
                c.windowWidth ==
                    e(window).width() ? (doResizeNow = !1, a.windowCurOrientation != window.orientation && -1 != navigator.userAgent.indexOf("Android") && (a.windowCurOrientation = window.orientation, doResizeNow = !0)) : c.windowWidth = e(window).width();
                a.responsive && doResizeNow && (!1 !== z && clearTimeout(z), z = setTimeout(function () {
                    var d = a,
                        h = k,
                        m = u,
                        A = B,
                        C = t,
                        z = F();
                    responsiveWidth = b.parent().parent().width();
                    responsiveHeight = b.parent().parent().height();
                    d.responsiveRelativeToBrowser && (responsiveWidth = e(window).width(), responsiveHeight = e(window).height());
                    d.width100Proc && (d.width = responsiveWidth);
                    d.height100Proc && (d.height = responsiveHeight);
                    if (d.origWidth != responsiveWidth || d.width100Proc) {
                        d.origWidth > responsiveWidth || d.width100Proc ? d.width = responsiveWidth : d.width100Proc || (d.width = d.origWidth);
                        d.height100Proc || (d.height = d.width / c.bannerRatio);
                        d.width = parseInt(d.width, 10);
                        d.height = parseInt(d.height, 10);
                        f.width(d.width);
                        f.height(d.height); - 1 != y.indexOf("ipad") || -1 != y.indexOf("iphone") || -1 != y.indexOf("ipod") || -1 != y.indexOf("webos") || -1 != z && 7 >= z ? (e("#curBgImgIos",
                            f).attr("src", c.current_imgInside.attr("src")), e("#curBgImgIos", f).width(d.width), e("#curBgImgIos", f).height(d.height)) : -1 == z || -1 != z && 9 <= z ? f.css({
                            "-webkit-background-size": d.width + "px " + d.height + "px",
                            "-moz-background-size": d.width + "px " + d.height + "px",
                            "-o-background-size": d.width + "px " + d.height + "px",
                            "-ms-background-size": d.width + "px " + d.height + "px",
                            "background-size": d.width + "px " + d.height + "px"
                        }) : 8 == z && f.css({
                            filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + c.current_imgInside.attr("src") +
                                "',sizingMethod='scale')"
                        });
                        m.css("margin-top", parseInt((d.height - r.height()) / 2, 10) + "px");
                        for (i = 0; i < h; i++) e(e(w[i]).attr("data-text-id")).css("width", b.width() + "px");
                        N(c, d, h, f, A, l, p, n, C, g, x);
                        clearTimeout(c.timeoutID);
                        E(1, c, v, f, A, w, l, p, n, d, h, C)
                    }
                }, 300))
            });
            B = e(".thumbsHolder_ThumbOFF", f);
            B.click(function () {
                D = !0;
                if (!c.effectIsRunning) {
                    var b = e(this).attr("rel");
                    e(B[c.current_img_no]).removeClass("thumbsHolder_ThumbON");
                    c.bottomNavClicked = !0;
                    c.current_img_no = b - 1;
                    E(1, c, v, f, B, w, l, p, n, a, k, t)
                }
            });
            B.mouseout(function () {
                D = !1
            });
            B.mouseenter(function () {
                var a = e(this);
                a.attr("rel");
                a.addClass("thumbsHolder_ThumbON")
            });
            B.mouseleave(function () {
                var a = e(this),
                    b = a.attr("rel");
                c.current_img_no != b && a.removeClass("thumbsHolder_ThumbON")
            });
            p.click(function () {
                D = !0;
                c.isCarouselScrolling || (C = l.css("left").substr(0, l.css("left").lastIndexOf("px")), 0 > C && G(1, l, p, n, a, k, t, c))
            });
            n.click(function () {
                D = !0;
                c.isCarouselScrolling || (C = l.css("left").substr(0, l.css("left").lastIndexOf("px")), Math.abs(C - c.carouselStep) < (t.width() + c.thumbMarginLeft) *
                    k && G(-1, l, p, n, a, k, t, c))
            });
            e(B[c.current_img_no]).addClass("thumbsHolder_ThumbON");
            0 < a.autoPlay && 1 < k && (a.showCircleTimer && (c.intervalID = setInterval(function () {
                K(c, a)
            }, 125)), c.timeoutID = setTimeout(function () {
                E(1, c, v, f, B, w, l, p, n, a, k, t)
            }, 1E3 * a.autoPlay))
        })
    };
    e.fn.myReverse = [].reverse;
    e.fn.allinone_thumbnailsBanner.defaults = {
        skin: "cool",
        width: 960,
        height: 384,
        width100Proc: !1,
        height100Proc: !1,
        randomizeImages: !1,
        firstImg: 0,
        numberOfStripes: 20,
        numberOfRows: 5,
        numberOfColumns: 10,
        defaultEffect: "random",
        effectDuration: .5,
        autoPlay: 4,
        loop: !0,
        target: "_blank",
        showAllControllers: !0,
        showNavArrows: !0,
        showOnInitNavArrows: !0,
        autoHideNavArrows: !0,
        showThumbs: !0,
        showOnInitThumbs: !0,
        autoHideThumbs: !1,
        thumbsReflection: 50,
        enableTouchScreen: !0,
        absUrl: "",
        showCircleTimer: !0,
        showCircleTimerIE8IE7: !1,
        circleRadius: 10,
        circleLineWidth: 4,
        circleColor: "#FF0000",
        circleAlpha: 100,
        behindCircleColor: "#000000",
        behindCircleAlpha: 50,
        responsive: !1,
        responsiveRelativeToBrowser: !0,
        numberOfThumbsPerScreen: 0,
        thumbsOnMarginTop: 0,
        thumbsWrapperMarginTop: 0,
        origWidth: 0,
        origHeight: 0,
        origThumbW: 0,
        origThumbH: 0,
        origthumbsHolderWrapperH: 121,
        origthumbsHolder_MarginTop: 0,
        windowOrientationScreenSize0: 0,
        windowOrientationScreenSize90: 0,
        windowOrientationScreenSize_90: 0,
        windowCurOrientation: 0
    }
})(jQuery);
