google.load("maps", "3.x", {"other_params":"sensor=false"});

function initialize() {
  var myLatLng = new google.maps.LatLng(35.2295623, 139.1010608); //マップの中心座標
  var myOptions = {
  zoom: 17, //ズームレベル
  center: myLatLng,
  disableDefaultUI: true,//各種コントロール無効化
  mapTypeId: google.maps.MapTypeId.ROADMAP,
  mapTypeControlOptions: {
  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'style']
  },
  };
  map = new google.maps.Map(document.getElementById("map"), myOptions);
  var mapstyle =
  //ここからJSON情報貼り付け
  [
    {
      "stylers": [
        { "hue": "#00ff33" },
        { "saturation": -68 }
      ]
    },{
      "featureType": "water",
      "elementType": "geometry.fill",
      "stylers": [
        { "visibility": "on" },
        { "color": "#40aecc" }
      ]
    },{
      "featureType": "road",
      "elementType": "geometry.fill",
      "stylers": [
        { "visibility": "on" },
        { "color": "#ffffff" }
      ]
    }
  ]
  //ここまで
  ;

  var mapType = new google.maps.StyledMapType(mapstyle);
  map.mapTypes.set('style', mapType);
  map.setMapTypeId('style');
  }
  google.setOnLoadCallback(initialize);
//作成したマップの呼び出し
google.setOnLoadCallback(initialize);