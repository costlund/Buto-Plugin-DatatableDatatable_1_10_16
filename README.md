# Buto-Plugin-DatatableDatatable_1_10_16
Add sort, paging and search methods to a html table via Javascript. Also export to csv, excel, pdf.


Include widget in head section. Add param style=bootstrap and/or param export=true for exporting.

```
type: widget
data:
  plugin: datatable/datatable_1_10_16
  method: include
  data:
    style: bootstrap
    export: true
```

Add widget after table. Set id param of your table.

```
type: widget
data:
  plugin: datatable/datatable_1_10_16
  method: run
  data:
    id: _my_table_id_
    json:
      paging: true
      ordering: true
      info: true
      searching: true
      order:
        -
          - 0
          - desc
      language:
        url: /plugin/datatable/datatable_1_10_16/i18n/Swedish.json
      dom: Bfrtip
      buttons:
        - copy
        - csv
        - excel
        - pdf
        - print
```

One could set custom page length options.

```
lengthMenu:
  -
    - 10
    - 25
    - 50
    - 100
    - 500
    - '-1'
  -
    - 10
    - 25
    - 50
    - 100
    - 500
    - All
```
