localeconv() gibt Daten basierend auf den aktuellen Locale-Einstellungen, wie sie mittels setlocale() festgelegt werden können, zurück. Das assoziative Array, das zurückgegeben wird, enthält folgende Felder:

Arrayelement	Beschreibung
decimal_point	Dezimaltrennzeichen
thousands_sep	Tausendertrennzeichen
grouping	Array mit numerischen Gruppierungen
int_curr_symbol	Internationales Währungssymbol (i.e. USD)
currency_symbol	Lokales Währungssymbol (i.e. $)
mon_decimal_point	Dezimaltrennzeichen bei Geldbeträgen
mon_thousands_sep	Tausendertrennzeichen bei Geldbeträgen
mon_grouping	Array mit Geldbetragsgruppierungen
positive_sign	Vorzeichen für positive Werte
negative_sign	Vorzeichen für negative WerteS
int_frac_digits	Internationale Dezimalbrüche
frac_digits	Lokale Dezimalbrüche
p_cs_precedes	Ist TRUE, wenn das Währungssymbol einem positiver Wert voransteht, oder FALSE, wenn es einem positiven Wert folgt.
p_sep_by_space	Ist TRUE, wenn ein Leerzeichen das Währungssymbol von einem positiven Wert trennt, ansonsten FALSE.
n_cs_precedes	Ist TRUE, wenn das Währungssymbol einem negativer Wert voransteht, oder FALSE, wenn es einem negativen Wert folgt.
n_sep_by_space	Ist TRUE, wenn ein Leerzeichen das Währungssymbol von einem negativen Wert trennt, ansonsten FALSE.
p_sign_posn	
0 - Klammern um Menge und Währungssymbol
1 - Das Vorzeichen steht vor Menge und Währungssymbol
2 - Das Vorzeichen steht hinter Menge und Währungssymbol
3 - Das Vorzeichen steht direkt vor Menge und Währungssymbol
4 - Das Vorzeichen steht direkt hinter Menge und Währungssymbol
n_sign_posn	
0 - Klammern um Menge und Währungssymbol
1 - Das Vorzeichen steht vor Menge und Währungssymbol
2 - Das Vorzeichen steht hinter Menge und Währungssymbol
3 - Das Vorzeichen steht direkt vor Menge und Währungssymbol
4 - Das Vorzeichen steht direkt hinter Menge und Währungssymbol