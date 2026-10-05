import { defineConfig } from 'vitepress'

let currentYear = new Date().getFullYear();

// https://vitepress.dev/reference/site-config
export default defineConfig({
  lang: 'en-GB',
  base: '/leaflet/',
  srcDir: 'src',

  ignoreDeadLinks: true,
  
  title: 'Leaflet V2 PHP',
  description: 'Leaflet V2 PHP Documentation',
  themeConfig: {
    // https://vitepress.dev/reference/default-theme-config
    siteTitle: 'Leaflet V2',
    nav: [
      {
        text: 'Guide',
        link: '/guide/index',
      },
      {
        text: 'Demo',
        link: '/demo/index',
      },
      {
        text: 'API',
        link: '/api/index',
      },
    ],
    sidebar: [
      {
        text: 'Getting Started',
        base: '/guide/',
        collapsed: true,
        items: [
          {
            text: 'Installation',
            link: 'installation'
          },
          {
            text: 'Usage',
            link: 'usage',
          }
        ]
      },
      {
        text: 'Demo',
        base: '/demo/',
        collapsed: true,
        link: 'index',
        items: [
          {
            text: 'Code',
            link: 'code'
          }
        ]
      },
      {
        text: 'API',
        base: '/api/',
        collapsed: true,
        link: "index",
        items: [
          {
            text: " Core and Common",
            base: "/api/",
            collapsed: true,
            items: [
              {
                text: "Addable",
                link: "addable"
              },
              {
                text: "AddableTrait",
                link: "addable-trait"
              },
              {
                text: "ClassNameTrait",
                link: "class-name-trait"
              },
              {
                text: "CrossOrigin",
                link: "cross-origin"
              },
              {
                text: "Event",
                link: "event"
              },
              {
                text: "EventTrait",
                link: "event-trait"
              },
              {
                text: "ImportTrait",
                link: "import-trait"
              },
              {
                text: "Importable",
                link: "importable"
              },
              {
                text: "Leaflet",
                link: "leaflet"
              },
              {
                text: "LeafletTrait",
                link: "leaflet-trait"
              },
              {
                text: "Map",
                link: "map"
              },
              {
                text: "MapClass",
                link: "map-class"
              },
              {
                text: "OptionsTrait",
                link: "options-trait"
              },
              {
                text: "ZIndexTrait",
                link: "z-index-trait"
              },
              {
                text: "ZoomTrait",
                link: "zoom-trait"
              },
            ]
          },
          {
            text: " Control",
            base: "/api/control/",
            collapsed: true,
            items: [
              {
                text: "Attribution",
                link: "attribution"
              },
              {
                text: "Control",
                link: "control"
              },
              {
                text: "Layers",
                link: "layers"
              },
              {
                text: "Position",
                link: "position"
              },
              {
                text: "Scale",
                link: "scale"
              },
              {
                text: "Zoom",
                link: "zoom"
              }
            ]
          },
          {
            text: " Layer",
            base: "/api/layer/",
            collapsed: true,
            items: [
              {
                text: "BlanketOverlay",
                link: "blanket-overlay"
              },
              {
                text: "InteractiveLayer",
                link: "interactive-layer"
              },
              {
                text: "Layer",
                link: "layer"
              },
              {
                text: "OpacityTrait",
                link: "opacity-trait"
              },
              {
                text: " Other",
                base: "/api/layer/other/",
                collapsed: true,
                items: [
                  {
                    text: "FeatureGroup",
                    link: "feature-group"
                  },
                  {
                    text: "GeoJson",
                    link: "geo-json"
                  },
                  {
                    text: "Group",
                    link: "group"
                  },
                  {
                    text: "LayerGroup",
                    link: "layer-group"
                  }
                ]
              },
              {
                text: " Raster",
                base: "/api/layer/raster/",
                collapsed: true,
                items: [
                  {
                    text: "CRS",
                    link: "c-r-s"
                  },
                  {
                    text: "Decoding",
                    link: "decoding"
                  },
                  {
                    text: "ImageOptionsTrait",
                    link: "image-options-trait"
                  },
                  {
                    text: "ImageOverlay",
                    link: "image-overlay"
                  },
                  {
                    text: "SvgOverlay",
                    link: "svg-overlay"
                  },
                  {
                    text: "TileLayer",
                    link: "tile-layer"
                  },
                  {
                    text: "TileLayerWms",
                    link: "tile-layer-wms"
                  },
                  {
                    text: "TileProvider",
                    link: "tile-provider"
                  },
                  {
                    text: "VideoOverlay",
                    link: "video-overlay"
                  },
                  {
                    text: "WmsImageFormat",
                    link: "wms-image-format"
                  }
                ]
              },
              {
                text: " UI",
                base: "/api/layer/u-i/",
                collapsed: true,
                items: [
                  {
                    text: "Direction",
                    link: "direction"
                  },
                  {
                    text: "DivOverlay",
                    link: "div-overlay"
                  },
                  {
                    text: "Marker",
                    link: "marker"
                  },
                  {
                    text: "Popup",
                    link: "popup"
                  },
                  {
                    text: "Tooltip",
                    link: "tooltip"
                  }
                ]
              },
              {
                text: " Vector",
                base: "/api/layer/vector/",
                collapsed: true,
                items: [
                  {
                    text: "Circle",
                    link: "circle"
                  },
                  {
                    text: "CircleMarker",
                    link: "circle-marker"
                  },
                  {
                    text: "FillRule",
                    link: "fill-rule"
                  },
                  {
                    text: "LineCap",
                    link: "line-cap"
                  },
                  {
                    text: "LineJoin",
                    link: "line-join"
                  },
                  {
                    text: "Path",
                    link: "path"
                  },
                  {
                    text: "Polygon",
                    link: "polygon"
                  },
                  {
                    text: "Polyline",
                    link: "polyline"
                  },
                  {
                    text: "PolylineTrait",
                    link: "polyline-trait"
                  },
                  {
                    text: "Rectangle",
                    link: "rectangle"
                  },
                  {
                    text: " Renderer",
                    base: "/api/layer/vector/renderer/",
                    collapsed: true,
                    items: [
                      {
                        text: "Canvas",
                        link: "canvas"
                      },
                      {
                        text: "Renderer",
                        link: "renderer"
                      },
                      {
                        text: "Svg",
                        link: "svg"
                      }
                    ]
                  }
                ]
              }
            ]
          },
          {
            text: " Type",
            base: "/api/type/",
            collapsed: true,
            items: [
              {
                text: "Bounds",
                link: "bounds"
              },
              {
                text: "DivIcon",
                link: "div-icon"
              },
              {
                text: "Icon",
                link: "icon"
              },
              {
                text: "LatLng",
                link: "lat-lng"
              },
              {
                text: "LatLngBounds",
                link: "lat-lng-bounds"
              },
              {
                text: "Point",
                link: "point"
              },
              {
                text: "Type",
                link: "type"
              }
            ]
          },
        ]
      }
    ],
    socialLinks: [
      {
        icon: 'github',
        link: 'https://github.com/beastbytes/leaflet-v2'
      }
    ],
    footer: {
      message: 'Released under the <a href="https://github.com/beastbytes/leaflet-v2/blob/main/LICENCE">3-Clause BSD Licence</a>.',
      copyright: `Copyright © 2026-${currentYear} BeastBytes`
    }
  }
})