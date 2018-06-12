# -*- coding: utf-8 -*-
"""
Created on Mon Oct 16 13:11:47 2017

@author: Maryse Anbar
"""

import xlrd
import json

# ouverture du fichier Excel 
wb = xlrd.open_workbook('Defi1_dpt_source_08.xlsx')

# feuilles dans le classeur
feuilles=wb.sheet_names()

print(feuilles)
indic = []
i = 0
data_format = {}

for sh_name in feuilles:
    sh = wb.sheet_by_name(sh_name)
    print(sh_name)
    colonne1 = sh.col_values(0)
    colonne2 = sh.col_values(1)
    i = i+1
    j = 0
    for el in colonne1:
        if el <> "" and j>3:
            el = str(el)
            data_format[el]= colonne2[j]
            indic.append(data_format)    
        j = j + 1
    
    name = "dpt_" + sh_name + ".json"
    with open(name, 'w') as f:
        f.write(json.dumps(indic, indent=4))