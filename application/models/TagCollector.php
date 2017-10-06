<?
define("MINIMUM_TAG_LENGTH","3");
class TagCollector extends Model{

    
    private $dbHost = "localhost";
    private $dbUserName;
    private $dbUsePass;
    private $dbName;
    private $connection;
    public $tagTable;
    
    private $_ignoreArray=array('?','of','the','is','off','you','them','then','at','with','i','it','We','we','this');
    private $_ignoreCharArray=array('?','!','.',',','~','@','#','$','%','^','&','*','(',')','-','_','+','=','<','>','/','[',']','{','}',':',';','"',"'",'~','`');
    private $ignore_small = array("tribal","tribe","years","nbsp","into","members","because","indians","says","indian","american","native","a","able","about","above","act","add","afraid","after","again","against","age","ago","agree","air","all","allow","also","always","am","among","an","and","anger","animal","answer","any","appear","apple","are","area","arm","arrange","arrive","art","as","ask","at","atom","baby","back","bad","ball","band","bank","bar","base","basic","bat","be","bear","beat","beauty","bed","been","before","began","begin","behind","believe","bell","best","better","between","big","bird","bit","black","block","blood","blow","blue","board","boat","body","bone","book","born","both","bottom","bought","box","boy","branch","bread","break","bright","bring","broad","broke","brother","brought","brown","build","burn","busy","but","buy","by","call","came","camp","can","capital","captain","car","card","care","carry","case","cat","catch","caught","cause","cell","cent","center","century","certain","chair","chance","change","character","charge","chart","check","chick","chief","child","children","choose","chord","circle","city","claim","class","clean","clear","climb","clock","close","clothe","cloud","coast","coat","cold","collect","colony","color","column","come","common","company","compare","complete","condition","connect","consider","consonant","contain","continent","continue","control","cook","cool","copy","corn","corner","correct","cost","cotton","could","count","country","course","cover","cow","crease","create","crop","cross","crowd","cry","current","cut","dad","dance","danger","dark","day","dead","deal","dear","death","decide","decimal","deep","degree","depend","describe","desert","design","determine","develop","dictionary","did","die","differ","difficult","direct","discuss","distant","divide","division","do","doctor","does","dog","dollar","done","don't","door","double","down","draw","dream","dress","drink","drive","drop","dry","duck","during","each","ear","early","earth","ease","east","eat","edge","effect","egg","eight","either","electric","element","else","end","enemy","energy","engine","enough","enter","equal","equate","especially","even","evening","event","ever","every","exact","example","except","excite","exercise","expect","experience","experiment","eye","face","fact","fair","fall","family","famous","far","farm","fast","fat","father","favor","fear","feed","feel","feet","fell","felt","few","field","fig","fight","figure","fill","final","find","fine","finger","finish","fire","first","fish","fit","five","flat","floor","flow","flower","fly","follow","food","foot","for","force","forest","form","forward","found","four","fraction","free","fresh","friend","from","front","fruit","full","fun","game","garden","gas","gather","gave","general","gentle","get","girl","give","glad","glass","go","gold","gone","good","got","govern","grand","grass","gray","great","green","grew","ground","group","grow","guess","guide","gun","had","hair","half","hand","happen","happy","hard","has","hat","have","he","head","hear","heard","heart","heat","heavy","held","help","her","here","high","hill","him","his","history","hit","hold","hole","home","hope","horse","hot","hot","hour","house","how","huge","human","hundred","hunt","hurry","I","ice","idea","if","imagine","in","inch","include","indicate","industry","insect","instant","instrument","interest","invent","iron","is","island","it","job","join","joy","jump","just","keep","kept","key","kill","kind","king","knew","know","lady","lake","land","language","large","last","late","laugh","law","lay","lead","learn","least","leave","led","left","leg","length","less","let","letter","level","lie","life","lift","light","like","line","liquid","list","listen","little","live","locate","log","lone","long","look","lost","lot","loud","love","low","machine","made","magnet","main","major","make","man","many","map","mark","market","mass","master","match","material","matter","may","me","mean","meant","measure","meat","meet","melody","men","metal","method","middle","might","mile","milk","million","mind","mine","minute","miss","mix","modern","molecule","moment","money","month","moon","more","morning","most","mother","motion","mount","mountain","mouth","move","much","multiply","music","must","my","name","nation","natural","nature","near","necessary","neck","need","neighbor","never","new","next","night","nine","no","noise","noon","nor","north","nose","note","nothing","notice","noun","now","number","numeral","object","observe","occur","ocean","of","off","offer","office","often","oh","oil","old","on","once","one","only","open","operate","opposite","or","order","organ","original","other","our","out","over","own","oxygen","page","paint","pair","paper","paragraph","parent","part","particular","party","pass","past","path","pattern","pay","people","perhaps","period","person","phrase","pick","picture","piece","pitch","place","plain","plan","plane","planet","plant","play","please","plural","poem","point","poor","populate","port","pose","position","possible","post","pound","power","practice","prepare","present","press","pretty","print","probable","problem","process","produce","product","proper","property","protect","prove","provide","pull","push","put","quart","question","quick","quiet","quite","quotient","race","radio","rail","rain","raise","ran","range","rather","reach","read","ready","real","reason","receive","record","red","region","remember","repeat","reply","represent","require","rest","result","rich","ride","right","ring","rise","river","road","rock","roll","room","root","rope","rose","round","row","rub","rule","run","safe","said","sail","salt","same","sand","sat","save","saw","say","scale","school","science","score","sea","search","season","seat","second","section","see","seed","seem","segment","select","self","sell","send","sense","sent","sentence","separate","serve","set","settle","seven","several","shall","shape","share","sharp","she","sheet","shell","shine","ship","shoe","shop","shore","short","should","shoulder","shout","show","side","sight","sign","silent","silver","similar","simple","since","sing","single","sister","sit","six","size","skill","skin","sky","slave","sleep","slip","slow","small","smell","smile","snow","so","soft","soil","soldier","solution","solve","some","son","song","soon","sound","south","space","speak","special","speech","speed","spell","spend","spoke","spot","spread","spring","square","stand","star","start","state","station","stay","stead","steam","steel","step","stick","still","stone","stood","stop","store","story","straight","strange","stream","street","stretch","string","strong","student","study","subject","substance","subtract","success","such","sudden","suffix","sugar","suggest","suit","summer","sun","supply","support","sure","surface","surprise","swim","syllable","symbol","system","table","tail","take","talk","tall","teach","team","teeth","tell","temperature","ten","term","test","than","thank","that","the","their","them","then","there","these","they","thick","thin","thing","think","third","this","those","though","thought","thousand","three","through","throw","thus","tie","time","tiny","tire","to","together","told","tone","too","took","tool","top","total","touch","toward","town","track","trade","train","travel","tree","triangle","trip","trouble","truck","true","try","tube","turn","twenty","two","type","under","unit","until","up","us","use","usual","valley","value","vary","verb","very","view","village","visit","voice","vowel","wait","walk","wall","want","war","warm","was","wash","watch","water","wave","way","we","wear","weather","week","weight","well","went","were","west","what","wheel","when","where","whether","which","while","white","who","whole","whose","why","wide","wife","wild","will","win","wind","window","wing","winter","wire","wish","with","woman","women","wonder","won't","wood","word","work","world","would","write","written","wrong","wrote","yard","year","yellow","yes","yet","you","young","your");
    
    public function TagCollector() {
        parent::Model();
    }
    public function setDBHost($hostname) { $this->dbHost = $hostname; }
    public function setDBUserName($username) { $this->dbUserName = $username; }
    public function setDBUserPass($pass) { $this->dbUsePass = $pass; }
    public function setDBName($change) {$this->dbName = $change; }
 
    public function connect() {
        $this->connection = mysql_pconnect($this->dbHost,$this->dbUserName,$this->dbUsePass) or Die("Problem with connection".mysql_error());
        $choose=mysql_selectdb($this->dbName) or Die("Problem with connection to database".mysql_error());
    }
    public function disconnect() {
        mysql_close($this->connection);
    }
    
    public function openDBDataSource($tableName,$colName,$start,$finish) {
        $limit = "LIMIT ";
        if($start < 0) { $limit = " ";}
        if(($finish == null)) { $finish = 1; }
        $limit .= $start.",".$finish;
        $sql="SELECT $colName FROM $tableName $limit";
        $result = mysql_query($sql) or Die("Problem with opening Data Source \n".mysql_error());
        while($row=mysql_fetch_array($result)) {
            $data = $row[$colName];
            $this->indexTags($this->findTags($data),$tableName);
        }
    }
    public function findTags($tagSource) {
        $tagArray=array();
        $tagSource=strip_tags($tagSource);
        $tagSource=strtolower($tagSource);
        $tags = str_word_count($tagSource,1);
        $count=count($tags);
	    for ($i=0;$i<$count;$i++){
                $word=trim($tags[$i]);
                $word=$this->removeSpecialChars($word);
	    	if(!in_array($word,$this->ignore_small) && !in_array($word,$this->_ignoreArray) && strlen($word)>MINIMUM_TAG_LENGTH) {
				$tagArray[]=$word;
			}
		}
        return array_unique($tagArray);
    }
    private function indexTags($tagArray,$sourceTab) {
        $counter=count($tagArray);
        for($i=0; $i<$counter;$i++) {
            $this->addTagToTable($tagArray[$i],$sourceTab);
        }
 
    }
    public function addTagToTable($item,$sourceTab) {
        $sql="select * from $this->tagTable where tag_keyword='".$item."'";
        $q=mysql_query($sql) or Die(mysql_error());
        $count=mysql_num_rows($q);
        if($count > 0) {
            $sql="UPDATE $this->tagTable SET occurrence=occurrence+1 WHERE tag_keyword='$item'";
            $result=mysql_query($sql) or Die ("Problem with existing tag".mysql_errror());
        } else {
            if(($item != NULL) || ($item != '')) {
            $sql="INSERT INTO $this->tagTable VALUES(0,'$item',0,'$sourceTab')";
            $result= mysql_query($sql) or Die("Problem with tag ".mysql_error());
            }
        }
    }
    public function countRecords($target,$source) {
        if(!isset($source)) { $cond1 = null; } else { $cond1 = "WHERE tag_item='".$source."'";}
        $sql="SELECT * FROM $this->tagTable $cond1";
        $q=mysql_query($sql) or Die(mysql_error());
        return mysql_num_rows($q);
    }
    private function removeSpecialChars($word) {
	$return=$word;
    	$count=count($this->_ignoreCharArray);
    	for ($i=0;$i<$count;$i++){
        	$return=str_replace($this->_ignoreCharArray,'',$return);
        }
        return $return;
    }
}
?>
