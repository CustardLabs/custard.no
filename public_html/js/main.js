$( document ).ready(function() {
  if ($("#email_link").length) {
    // Email obfuscator script 2.1 by Tim Williams, University of Arizona
    // Random encryption key feature by Andrew Moulden, Site Engineering Ltd
    // This code is freeware provided these four comment lines remain intact
    // A wizard to generate this code is at http://www.jottings.com/obfuscator/
    { coded = "dOBN@peQvD7H.ON"
      key = "0NcEXOtZAMuQ6wVW8pyqrva4kei2UJzfI9P7lD3STdghCYBGoKFmnLjbH5sRx1"
      shift=coded.length;
      link=""
      for (i=0; i<coded.length; i++) {
        if (key.indexOf(coded.charAt(i))===-1) {
          ltr = coded.charAt(i)
          link += (ltr)
        }
        else {     
          ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
          link += (key.charAt(ltr))
        }
      }
    }
    $("#email_link").html("<a href='mailto:"+link+"'>"+link+"</a>");
  }
  
  if ($("#lifestream").length) {
    (function(){
      let count = 0,
      list = [
        {
          service: 'facebook_page',
          user: '698075250263209'
        },
        {
          service: 'github',
          user: 'rooster'
        },
        {
          service: 'rss',
          user: 'http://eatmymonkeydust.com/category/PHP/feed/'
        },
        {
          service: 'rss',
          user: 'https://phpc.social/@russ.rss',
        },
        {
          service: 'twitter',
          user: 'custardlabs'
        }
      ];

      Date.prototype.toISO8601 = function(date) {
          var pad = function (amount, width) {
              var padding = "";
              while (padding.length < width - 1 && amount < Math.pow(10, width - padding.length - 1))
                  padding += "0";
              return padding + amount.toString();
          }
          date = date ? date : new Date();
          var offset = date.getTimezoneOffset();
          return pad(date.getFullYear(), 4)
              + "-" + pad(date.getMonth() + 1, 2)
              + "-" + pad(date.getDate(), 2)
              + "T" + pad(date.getHours(), 2)
              + ":" + pad(date.getMinutes(), 2)
              + ":" + pad(date.getUTCSeconds(), 2)
              + (offset > 0 ? "-" : "+")
              + pad(Math.floor(Math.abs(offset) / 60), 2)
              + ":" + pad(Math.abs(offset) % 60, 2);
      };

      $("#lifestream").lifestream({
        limit: $("#lifestream").data("limit"),
        list: list,
        feedloaded: function(){
          count++;
          // Check if all the feeds have been loaded
          if( count === list.length + 1 ){
            $("#lifestream li").each(function(){
              var element = $(this),
                  date = new Date(element.data("time"));
              element.append(' <abbr class="timeago" title="' + date.toISO8601(date) + '">' + date + "</abbr>");
            })
            $("#lifestream .timeago").timeago();
          }
        }
      });
    })();
    
    
    
    
    
    
    
    
  }
  
  
  
});