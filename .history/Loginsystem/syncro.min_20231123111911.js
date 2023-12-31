(function () {
    var e = "div",
      t = "button",
      a = "span",
      r = "p",
      o = {
        title: "Ticket Categories",
        catagories: [
          { name: "Remote Support", value: 66, color: "#ff6384" },
          { name: "Contract Work", value: 14, color: "#ff9f40" },
          { name: "Network Project", value: 8, color: "#ffcd56" },
          { name: "Regular Maintenance", value: 6, color: "#4bc0c0" },
          { name: "string", value: 6, color: "" },
        ],
      };
  
    function n(e, t) {
      "mouseenter" === e.type
        ? t.classList.contains("active") || t.classList.add("active")
        : "mouseleave" === e.type &&
          t.classList.contains("active") &&
          t.classList.remove("active");
    }
  
    function c(e, t = "") {
      var a = document.createElement(e);
      t && t.split(" ").forEach(function (e, t) {
        a.classList.add(e);
      });
      return a;
    }
  
    window.addEventListener("load", function () {
      [].forEach.call(document.querySelectorAll("[data-stepped-bar]"), function (s, i) {
        if (s) {
          var l, d = 0;
          l = s.getAttribute("data-stepped-bar") ? JSON.parse(s.getAttribute("data-stepped-bar")) : o;
          var p = c(r, "syncro-card-title");
          p.textContent = l.title;
          var u = c(e, "syncro-progress-stepped"),
            v = c(e, "syncro-row");
  
          l.catagories.forEach(function (e, t) {
            d += e.value;
          });
  
          l.catagories.forEach(function (r, o) {
            stepItem = c(e, "syncro-progress-stepped-item");
            stepItem.setAttribute("data-id", "progress-stepped-item-" + i + "-" + o);
            stepItem.textContent = r.value;
            stepItem.style.width = r.value / d * 100 + "%";
            stepItem.style.backgroundColor = r.color;
            u.appendChild(stepItem);
  
            var n = c(a, "syncro-dot");
            n.style.backgroundColor = r.color;
  
            var s = c(a, "syncro-category-name");
            s.textContent = r.name;
  
            var l = c(t, "syncro-btn");
            l.setAttribute("data-target", "progress-stepped-item-" + i + "-" + o);
            l.appendChild(n);
            l.appendChild(s);
  
            var p = c(e, "syncro-col-auto");
            p.appendChild(l);
            v.appendChild(p);
          });
  
          var m = c(e, "syncro-card-body");
          m.appendChild(p);
          m.appendChild(u);
          m.appendChild(v);
  
          var f = c(e, "syncro-card");
          f.appendChild(m);
  
          var y = c(e);
          y.appendChild(f);
          s.innerHTML = y.innerHTML;
  
          [].forEach.call(s.querySelectorAll(".syncro-progress-stepped-item"), function (e) {
            e.addEventListener("mouseenter", function (t) {
              n(t, e);
            });
            e.addEventListener("mouseleave", function (t) {
              n(t, e);
            });
          });
  
          [].forEach.call(s.querySelectorAll(".syncro-btn"), function (e) {
            e.addEventListener("click", function () {
              const t = e.getAttribute("data-target");
              var a = document.querySelector('[data-id="' + t + '"]');
              a.classList.contains("active")
                ? a.classList.remove("active")
                : ([].forEach.call(s.querySelectorAll(".syncro-progress-stepped-item"), function (e) {
                    e.classList.remove("active");
                  }),
                  a.classList.add("active"));
            });
          });
        }
      });
    });
  })();
  