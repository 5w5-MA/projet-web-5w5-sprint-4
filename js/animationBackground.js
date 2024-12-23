const couleurLigne = JSON.parse(localStorage.getItem("couleurLigne"));

if (couleurLigne == null) {
  localStorage.setItem("couleurLigne", JSON.stringify([255, 255, 255]));
  window.location.reload();
}

(function ($) {
  var canvas = $("#bg").children("canvas"),
    background = canvas[0],
    foreground1 = canvas[1],
    foreground2 = canvas[2],
    config = {
      square: {
        // Remplacer "circle" par "square"
        amount: 18,
        layer: 3,
        color: [137, 174, 255],
        alpha: 0.3,
      },
      line: {
        amount: 12,
        layer: 3,
        color: couleurLigne,
        alpha: 0.3,
      },
      speed: 0.5,
      angle: 20,
    };

  if (background.getContext) {
    var bctx = background.getContext("2d"),
      fctx1 = foreground1.getContext("2d"),
      fctx2 = foreground2.getContext("2d"),
      M = window.Math, // Cached Math
      degree = (config.angle / 360) * M.PI * 2,
      squares = [], // Remplacer "circles" par "squares"
      lines = [],
      wWidth,
      wHeight,
      timer;

    requestAnimationFrame =
      window.requestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.msRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      function (callback, element) {
        setTimeout(callback, 1000 / 60);
      };

    cancelAnimationFrame =
      window.cancelAnimationFrame ||
      window.mozCancelAnimationFrame ||
      window.webkitCancelAnimationFrame ||
      window.msCancelAnimationFrame ||
      window.oCancelAnimationFrame ||
      clearTimeout;

    var setCanvasHeight = function () {
      wWidth = $(window).width();
      (wHeight = $(window).height()),
        canvas.each(function () {
          this.width = wWidth;
          this.height = wHeight;
        });
    };

    // Fonction pour dessiner un carrÃ©
    var drawSquare = function (x, y, size, color, alpha) {
      fctx1.beginPath();
      fctx1.rect(x - size / 2, y - size / 2, size, size); // Dessiner un carrÃ© centrÃ©
      fctx1.closePath();

      var gradient = fctx1.createLinearGradient(
        x - size / 2,
        y - size / 2,
        x + size / 2,
        y + size / 2
      );
      gradient.addColorStop(
        0,
        "rgba(" + color[0] + "," + color[1] + "," + color[2] + "," + alpha + ")"
      );
      gradient.addColorStop(
        1,
        "rgba(" +
          color[0] +
          "," +
          color[1] +
          "," +
          color[2] +
          "," +
          (alpha - 0.1) +
          ")"
      );

      fctx1.fillStyle = gradient;
      fctx1.fill();
    };

    var drawLine = function (x, y, width, color, alpha) {
      var endX = x + M.sin(degree) * width,
        endY = y - M.cos(degree) * width,
        gradient = fctx2.createLinearGradient(x, y, endX, endY);
      gradient.addColorStop(
        0,
        "rgba(" + color[0] + "," + color[1] + "," + color[2] + "," + alpha + ")"
      );
      gradient.addColorStop(
        1,
        "rgba(" +
          color[0] +
          "," +
          color[1] +
          "," +
          color[2] +
          "," +
          (alpha - 0.1) +
          ")"
      );

      fctx2.beginPath();
      fctx2.moveTo(x, y);
      fctx2.lineTo(endX, endY);
      fctx2.lineWidth = 3;
      fctx2.lineCap = "round";
      fctx2.strokeStyle = gradient;
      fctx2.stroke();
    };

    var drawBack = function () {
      bctx.clearRect(0, 0, wWidth, wHeight);

      var gradient = [];

      gradient[0] = bctx.createRadialGradient(
        wWidth * 0.3,
        wHeight * 0.1,
        0,
        wWidth * 0.3,
        wHeight * 0.1,
        wWidth * 0.9
      );
      gradient[0].addColorStop(0, "rgb(56, 56, 56)");
      gradient[0].addColorStop(1, "transparent");

      bctx.translate(wWidth, 0);
      bctx.scale(-1, 1);
      bctx.beginPath();
      bctx.fillStyle = gradient[0];
      bctx.fillRect(0, 0, wWidth, wHeight);

      gradient[1] = bctx.createRadialGradient(
        wWidth * 0.1,
        wHeight * 0.1,
        0,
        wWidth * 0.3,
        wHeight * 0.1,
        wWidth
      );
      gradient[1].addColorStop(0, "rgb(56, 56, 56)");
      gradient[1].addColorStop(0.8, "transparent");

      bctx.translate(wWidth, 0);
      bctx.scale(-1, 1);
      bctx.beginPath();
      bctx.fillStyle = gradient[1];
      bctx.fillRect(0, 0, wWidth, wHeight);

      gradient[2] = bctx.createRadialGradient(
        wWidth * 0.1,
        wHeight * 0.5,
        0,
        wWidth * 0.1,
        wHeight * 0.5,
        wWidth * 0.5
      );
      gradient[2].addColorStop(0, "rgb(56, 56, 56)");
      gradient[2].addColorStop(1, "transparent");

      bctx.beginPath();
      bctx.fillStyle = gradient[2];
      bctx.fillRect(0, 0, wWidth, wHeight);
    };

    var animate = function () {
      var sin = M.sin(degree),
        cos = M.cos(degree);

      if (config.square.amount > 0 && config.square.layer > 0) {
        fctx1.clearRect(0, 0, wWidth, wHeight);
        for (var i = 0, len = squares.length; i < len; i++) {
          var item = squares[i],
            x = item.x,
            y = item.y,
            size = item.size,
            speed = item.speed;

          if (x > wWidth + size) {
            x = -size;
          } else if (x < -size) {
            x = wWidth + size;
          } else {
            x += sin * speed;
          }

          if (y > wHeight + size) {
            y = -size;
          } else if (y < -size) {
            y = wHeight + size;
          } else {
            y -= cos * speed;
          }

          item.x = x;
          item.y = y;
          drawSquare(x, y, size, item.color, item.alpha); // Appeler drawSquare
        }
      }

      if (config.line.amount > 0 && config.line.layer > 0) {
        fctx2.clearRect(0, 0, wWidth, wHeight);
        for (var j = 0, len = lines.length; j < len; j++) {
          var item = lines[j],
            x = item.x,
            y = item.y,
            width = item.width,
            speed = item.speed;

          if (x > wWidth + width * sin) {
            x = -width * sin;
          } else if (x < -width * sin) {
            x = wWidth + width * sin;
          } else {
            x += sin * speed;
          }

          if (y > wHeight + width * cos) {
            y = -width * cos;
          } else if (y < -width * cos) {
            y = wHeight + width * cos;
          } else {
            y -= cos * speed;
          }

          item.x = x;
          item.y = y;
          drawLine(x, y, width, item.color, item.alpha);
        }
      }

      timer = requestAnimationFrame(animate);
    };

    var createItem = function () {
      squares = []; // Initialiser le tableau des carrÃ©s
      lines = [];

      if (config.square.amount > 0 && config.square.layer > 0) {
        for (var i = 0; i < config.square.amount / config.square.layer; i++) {
          for (var j = 0; j < config.square.layer; j++) {
            squares.push({
              x: M.random() * wWidth,
              y: M.random() * wHeight,
              size: M.random() * (30 + j * 5) + (30 + j * 5), // Taille ajustÃ©e pour les carrÃ©s
              color: config.square.color,
              alpha: M.random() * 0.2 + (config.square.alpha - j * 0.1),
              speed: config.speed * (1 + j * 0.5),
            });
          }
        }
      }

      if (config.line.amount > 0 && config.line.layer > 0) {
        for (var m = 0; m < config.line.amount / config.line.layer; m++) {
          for (var n = 0; n < config.line.layer; n++) {
            lines.push({
              x: M.random() * wWidth,
              y: M.random() * wHeight,
              width: M.random() * (20 + n * 5) + (20 + n * 5),
              color: config.line.color,
              alpha: M.random() * 0.2 + (config.line.alpha - n * 0.1),
              speed: config.speed * (1 + n * 0.5),
            });
          }
        }
      }

      cancelAnimationFrame(timer);
      timer = requestAnimationFrame(animate);
      drawBack();
    };

    $(document).ready(function () {
      setCanvasHeight();
      createItem();
    });

    $(window).resize(function () {
      setCanvasHeight();
      createItem();
    });
  }
})(jQuery);
