//REFERENCE https://jqueryui.com/autocomplete/#default
 $(function() {
    var availableTags = [
      "Abbotsford",
"Amos",
"Baie Verte",
"Baie-Comeau",
"Baie-Saint-Paul",
"Belleterre",
"Blind River",
"Bracebridge",
"Brampton",
"B�cancour",
"Caledon",
"Calgary",
"Cape Breton Regional Municipality",
"Chandler",
"Chibougamau",
"Clarence-Rockland",
"Cochrane",
"Cookshire-Eaton",
"County of Brant",
"Dolbeau-Mistassini",
"D�gelis",
"Edmonton",
"Elliot Lake",
"Erin",
"Essex",
"Fermont",
"Gasp�",
"Gatineau",
"Georgina",
"Gillam",
"Gracefield",
"Gravenhurst",
"Greater Napanee",
"Greater Sudbury",
"Haldimand County",
"Halifax Regional Municipality",
"Halton Hills",
"Hamilton",
"Happy Valley-Goose Bay",
"Huntsville",
"Innisfil",
"Iroquois Falls",
"Kamloops",
"Kawartha Lakes",
"Kearney",
"Kingston",
"La Malbaie",
"La Tuque",
"Lakeshore",
"Laurentian Hills",
"Leaf Rapids",
"London",
"Lynn Lake",
"L�vis",
"Milton",
"Minto",
"Mirabel",
"Mississauga",
"Mississippi Mills",
"Mono",
"Mont-Laurier",
"Montreal",
"New Tecumseth",
"Norfolk County",
"North Bay",
"Northeastern Manitoulin and the Islands",
"Ottawa",
"Perc�",
"Plympton�Wyoming",
"Poh�n�gamook",
"Port-Cartier",
"Prince Edward County",
"Prince George",
"Queens",
"Quinte West",
"Qu�bec City",
"Rivi�re-Rouge",
"Rouyn-Noranda",
"Saguenay",
"Saint John",
"Saint-F�licien",
"Saint-Raymond",
"Senneterre",
"Sept-�les",
"Shawinigan",
"Sherbrooke",
"Snow Lake",
"South Bruce Peninsula",
"St. Johns",
"Surrey",
"The Blue Mountains",
"Thunder Bay",
"Timmins",
"Toronto",
"Trois-Rivi�res",
"T�miscaming",
"Val-dOr",
"Vaughan",
"Whitehorse",
"Winnipeg"
    ];
    $( "#searchinfo" ).autocomplete({
      source: availableTags
    });
  });
 
 