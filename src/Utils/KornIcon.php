<?php

namespace KornyellowLib\Utils;

class KornIcon {
	public function __construct(
		private readonly string $iconName = "",
		private string|null     $size = null,
		private int             $marginLeft = 0,
		private int             $marginRight = 0,
		private bool            $isFullWidth = true,
		private string          $additionalClasses = "",
		private bool            $isEmpty = false,
	) {}

	public function __toString(): string {
		if ($this->isEmpty)
			return "";

		$class = trim(preg_replace("/\s+/", " ", "
			fa-solid ".($this->additionalClasses)."
			fa-".($this->iconName)." ".($this->isFullWidth ? "fa-fw" : "")." 
			ms-".($this->marginLeft)." me-".($this->marginRight)."
			".(is_null($this->size) ? "" : "fa-".($this->size))."
		"));

		return "
			<i class='$class'></i>
		";
	}
	public function getIconName(): string { return $this->iconName; }

	public function mx1(): self {
		$this->marginLeft = $this->marginRight = 1;

		return $this;
	}
	public function mx2(): self {
		$this->marginLeft = $this->marginRight = 2;

		return $this;
	}
	public function mx3(): self {
		$this->marginLeft = $this->marginRight = 3;

		return $this;
	}
	public function mx4(): self {
		$this->marginLeft = $this->marginRight = 4;

		return $this;
	}
	public function mx5(): self {
		$this->marginLeft = $this->marginRight = 5;

		return $this;
	}

	public function ms1(): self {
		$this->marginLeft = 1;

		return $this;
	}
	public function ms2(): self {
		$this->marginLeft = 2;

		return $this;
	}
	public function ms3(): self {
		$this->marginLeft = 3;

		return $this;
	}
	public function ms4(): self {
		$this->marginLeft = 4;

		return $this;
	}
	public function ms5(): self {
		$this->marginLeft = 5;

		return $this;
	}

	public function me1(): self {
		$this->marginRight = 1;

		return $this;
	}
	public function me2(): self {
		$this->marginRight = 2;

		return $this;
	}
	public function me3(): self {
		$this->marginRight = 3;

		return $this;
	}
	public function me4(): self {
		$this->marginRight = 4;

		return $this;
	}
	public function me5(): self {
		$this->marginRight = 5;

		return $this;
	}

	public function xxs(): self {
		$this->size = "xxs";

		return $this;
	}
	public function xs(): self {
		$this->size = "xs";

		return $this;
	}
	public function sm(): self {
		$this->size = "sm";

		return $this;
	}
	public function lg(): self {
		$this->size = "lg";

		return $this;
	}
	public function xl(): self {
		$this->size = "xl";

		return $this;
	}
	public function xxl(): self {
		$this->size = "xxl";

		return $this;
	}

	public function nofw(): self {
		$this->isFullWidth = false;

		return $this;
	}
	public function more(string $classes): self {
		$this->additionalClasses .= $classes." ";

		return $this;
	}

	/**
	 * @return KornIcon[]
	 */
	public static function getAll(): array {
		return [
			self::n0(),
			self::n1(),
			self::n2(),
			self::n3(),
			self::n4(),
			self::n5(),
			self::n6(),
			self::n7(),
			self::n8(),
			self::n9(),
			self::a(),
			self::addressBook(),
			self::addressCard(),
			self::alignCenter(),
			self::alignJustify(),
			self::alignLeft(),
			self::alignRight(),
			self::anchor(),
			self::anchorCircleCheck(),
			self::anchorCircleExclamation(),
			self::anchorCircleXmark(),
			self::anchorLock(),
			self::angleDown(),
			self::angleLeft(),
			self::angleRight(),
			self::angleUp(),
			self::anglesDown(),
			self::anglesLeft(),
			self::anglesRight(),
			self::anglesUp(),
			self::ankh(),
			self::appleWhole(),
			self::archway(),
			self::arrowDown(),
			self::arrowDown1to9(),
			self::arrowDown9to1(),
			self::arrowDownAtoZ(),
			self::arrowDownLong(),
			self::arrowDownShortWide(),
			self::arrowDownUpAcrossLine(),
			self::arrowDownUpLock(),
			self::arrowDownWideShort(),
			self::arrowDownZtoA(),
			self::arrowLeft(),
			self::arrowLeftLong(),
			self::arrowPointer(),
			self::arrowRight(),
			self::arrowRightArrowLeft(),
			self::arrowRightFromBracket(),
			self::arrowRightLong(),
			self::arrowRightToBracket(),
			self::arrowRightToCity(),
			self::arrowRotateLeft(),
			self::arrowRotateRight(),
			self::arrowTrendDown(),
			self::arrowTrendUp(),
			self::arrowTurnDown(),
			self::arrowTurnUp(),
			self::arrowUp(),
			self::arrowUp1to9(),
			self::arrowUp9to1(),
			self::arrowUpAtoZ(),
			self::arrowUpFromBracket(),
			self::arrowUpFromGroundWater(),
			self::arrowUpFromWaterPump(),
			self::arrowUpLong(),
			self::arrowUpRightDots(),
			self::arrowUpRightFromSquare(),
			self::arrowUpShortWide(),
			self::arrowUpWideShort(),
			self::arrowUpZtoA(),
			self::arrowsDownToLine(),
			self::arrowsDownToPeople(),
			self::arrowsLeftRight(),
			self::arrowsLeftRightToLine(),
			self::arrowsRotate(),
			self::arrowsSpin(),
			self::arrowsSplitUpAndLeft(),
			self::arrowsToCircle(),
			self::arrowsToDot(),
			self::arrowsToEye(),
			self::arrowsTurnRight(),
			self::arrowsTurnToDots(),
			self::arrowsUpDown(),
			self::arrowsUpDownLeftRight(),
			self::arrowsUpToLine(),
			self::asterisk(),
			self::at(),
			self::atom(),
			self::audioDescription(),
			self::australSign(),
			self::award(),
			self::b(),
			self::baby(),
			self::babyCarriage(),
			self::backward(),
			self::backwardFast(),
			self::backwardStep(),
			self::bacon(),
			self::bacteria(),
			self::bacterium(),
			self::bagShopping(),
			self::bahai(),
			self::bahtSign(),
			self::ban(),
			self::banSmoking(),
			self::bandage(),
			self::bangladeshiTakaSign(),
			self::barcode(),
			self::bars(),
			self::barsProgress(),
			self::barsStaggered(),
			self::baseball(),
			self::baseballBatBall(),
			self::basketShopping(),
			self::basketball(),
			self::bath(),
			self::batteryEmpty(),
			self::batteryFull(),
			self::batteryHalf(),
			self::batteryQuarter(),
			self::batteryThreeQuarters(),
			self::bed(),
			self::bedPulse(),
			self::beerMugEmpty(),
			self::bell(),
			self::bellConcierge(),
			self::bellSlash(),
			self::bezierCurve(),
			self::bicycle(),
			self::binoculars(),
			self::biohazard(),
			self::bitcoinSign(),
			self::blender(),
			self::blenderPhone(),
			self::blog(),
			self::bold(),
			self::bolt(),
			self::boltLightning(),
			self::bomb(),
			self::bone(),
			self::bong(),
			self::book(),
			self::bookAtlas(),
			self::bookBible(),
			self::bookBookmark(),
			self::bookJournalWhills(),
			self::bookMedical(),
			self::bookOpen(),
			self::bookOpenReader(),
			self::bookQuran(),
			self::bookSkull(),
			self::bookTanakh(),
			self::bookmark(),
			self::borderAll(),
			self::borderNone(),
			self::borderTopLeft(),
			self::boreHole(),
			self::bottleDroplet(),
			self::bottleWater(),
			self::bowlFood(),
			self::bowlRice(),
			self::bowlingBall(),
			self::box(),
			self::boxArchive(),
			self::boxOpen(),
			self::boxTissue(),
			self::boxesPacking(),
			self::boxesStacked(),
			self::braille(),
			self::brain(),
			self::brazilianRealSign(),
			self::breadSlice(),
			self::bridge(),
			self::bridgeCircleCheck(),
			self::bridgeCircleExclamation(),
			self::bridgeCircleXmark(),
			self::bridgeLock(),
			self::bridgeWater(),
			self::briefcase(),
			self::briefcaseMedical(),
			self::broom(),
			self::broomBall(),
			self::brush(),
			self::bucket(),
			self::bug(),
			self::bugSlash(),
			self::bugs(),
			self::building(),
			self::buildingCircleArrowRight(),
			self::buildingCircleCheck(),
			self::buildingCircleExclamation(),
			self::buildingCircleXmark(),
			self::buildingColumns(),
			self::buildingFlag(),
			self::buildingLock(),
			self::buildingNgo(),
			self::buildingShield(),
			self::buildingUn(),
			self::buildingUser(),
			self::buildingWheat(),
			self::bullhorn(),
			self::bullseye(),
			self::burger(),
			self::burst(),
			self::bus(),
			self::busSimple(),
			self::businessTime(),
			self::c(),
			self::cableCar(),
			self::cakeCandles(),
			self::calculator(),
			self::calendar(),
			self::calendarCheck(),
			self::calendarDay(),
			self::calendarDays(),
			self::calendarMinus(),
			self::calendarPlus(),
			self::calendarWeek(),
			self::calendarXmark(),
			self::camera(),
			self::cameraRetro(),
			self::cameraRotate(),
			self::campground(),
			self::candyCane(),
			self::cannabis(),
			self::capsules(),
			self::car(),
			self::carBattery(),
			self::carBurst(),
			self::carOn(),
			self::carRear(),
			self::carSide(),
			self::carTunnel(),
			self::caravan(),
			self::caretDown(),
			self::caretLeft(),
			self::caretRight(),
			self::caretUp(),
			self::carrot(),
			self::cartArrowDown(),
			self::cartFlatbed(),
			self::cartFlatbedSuitcase(),
			self::cartPlus(),
			self::cartShopping(),
			self::cashRegister(),
			self::cat(),
			self::cediSign(),
			self::centSign(),
			self::certificate(),
			self::chair(),
			self::chalkboard(),
			self::chalkboardUser(),
			self::champagneGlasses(),
			self::chargingStation(),
			self::chartArea(),
			self::chartBar(),
			self::chartColumn(),
			self::chartGantt(),
			self::chartLine(),
			self::chartPie(),
			self::chartSimple(),
			self::check(),
			self::checkDouble(),
			self::checkToSlot(),
			self::cheese(),
			self::chess(),
			self::chessBishop(),
			self::chessBoard(),
			self::chessKing(),
			self::chessKnight(),
			self::chessPawn(),
			self::chessQueen(),
			self::chessRook(),
			self::chevronDown(),
			self::chevronLeft(),
			self::chevronRight(),
			self::chevronUp(),
			self::child(),
			self::childCombatant(),
			self::childDress(),
			self::childReaching(),
			self::children(),
			self::church(),
			self::circle(),
			self::circleArrowDown(),
			self::circleArrowLeft(),
			self::circleArrowRight(),
			self::circleArrowUp(),
			self::circleCheck(),
			self::circleChevronDown(),
			self::circleChevronLeft(),
			self::circleChevronRight(),
			self::circleChevronUp(),
			self::circleDollarToSlot(),
			self::circleDot(),
			self::circleDown(),
			self::circleExclamation(),
			self::circleH(),
			self::circleHalfStroke(),
			self::circleInfo(),
			self::circleLeft(),
			self::circleMinus(),
			self::circleNodes(),
			self::circleNotch(),
			self::circlePause(),
			self::circlePlay(),
			self::circlePlus(),
			self::circleQuestion(),
			self::circleRadiation(),
			self::circleRight(),
			self::circleStop(),
			self::circleUp(),
			self::circleUser(),
			self::circleXmark(),
			self::city(),
			self::clapperboard(),
			self::clipboard(),
			self::clipboardCheck(),
			self::clipboardList(),
			self::clipboardQuestion(),
			self::clipboardUser(),
			self::clock(),
			self::clockRotateLeft(),
			self::clone(),
			self::closedCaptioning(),
			self::cloud(),
			self::cloudArrowDown(),
			self::cloudArrowUp(),
			self::cloudBolt(),
			self::cloudMeatball(),
			self::cloudMoon(),
			self::cloudMoonRain(),
			self::cloudRain(),
			self::cloudShowersHeavy(),
			self::cloudShowersWater(),
			self::cloudSun(),
			self::cloudSunRain(),
			self::clover(),
			self::code(),
			self::codeBranch(),
			self::codeCommit(),
			self::codeCompare(),
			self::codeFork(),
			self::codeMerge(),
			self::codePullRequest(),
			self::coins(),
			self::colonSign(),
			self::comment(),
			self::commentDollar(),
			self::commentDots(),
			self::commentMedical(),
			self::commentSlash(),
			self::commentSms(),
			self::comments(),
			self::commentsDollar(),
			self::compactDisc(),
			self::compass(),
			self::compassDrafting(),
			self::compress(),
			self::computer(),
			self::computerMouse(),
			self::cookie(),
			self::cookieBite(),
			self::copy(),
			self::copyright(),
			self::couch(),
			self::cow(),
			self::creditCard(),
			self::crop(),
			self::cropSimple(),
			self::cross(),
			self::crosshairs(),
			self::crow(),
			self::crown(),
			self::crutch(),
			self::cruzeiroSign(),
			self::cube(),
			self::cubes(),
			self::cubesStacked(),
			self::d(),
			self::database(),
			self::deleteLeft(),
			self::democrat(),
			self::desktop(),
			self::dharmachakra(),
			self::diagramNext(),
			self::diagramPredecessor(),
			self::diagramProject(),
			self::diagramSuccessor(),
			self::diamond(),
			self::diamondTurnRight(),
			self::dice(),
			self::diceD20(),
			self::diceD6(),
			self::diceFive(),
			self::diceFour(),
			self::diceOne(),
			self::diceSix(),
			self::diceThree(),
			self::diceTwo(),
			self::disease(),
			self::display(),
			self::divide(),
			self::dna(),
			self::dog(),
			self::dollarSign(),
			self::dolly(),
			self::dongSign(),
			self::doorClosed(),
			self::doorOpen(),
			self::dove(),
			self::downLeftAndUpRightToCenter(),
			self::downLong(),
			self::download(),
			self::dragon(),
			self::drawPolygon(),
			self::droplet(),
			self::dropletSlash(),
			self::drum(),
			self::drumSteelpan(),
			self::drumstickBite(),
			self::dumbbell(),
			self::dumpster(),
			self::dumpsterFire(),
			self::dungeon(),
			self::e(),
			self::earDeaf(),
			self::earListen(),
			self::earthAfrica(),
			self::earthAmericas(),
			self::earthAsia(),
			self::earthEurope(),
			self::earthOceania(),
			self::egg(),
			self::eject(),
			self::elevator(),
			self::ellipsis(),
			self::ellipsisVertical(),
			self::envelope(),
			self::envelopeCircleCheck(),
			self::envelopeOpen(),
			self::envelopeOpenText(),
			self::envelopesBulk(),
			self::equals(),
			self::eraser(),
			self::ethernet(),
			self::euroSign(),
			self::exclamation(),
			self::expand(),
			self::explosion(),
			self::eye(),
			self::eyeDropper(),
			self::eyeLowVision(),
			self::eyeSlash(),
			self::f(),
			self::faceAngry(),
			self::faceDizzy(),
			self::faceFlushed(),
			self::faceFrown(),
			self::faceFrownOpen(),
			self::faceGrimace(),
			self::faceGrin(),
			self::faceGrinBeam(),
			self::faceGrinBeamSweat(),
			self::faceGrinHearts(),
			self::faceGrinSquint(),
			self::faceGrinSquintTears(),
			self::faceGrinStars(),
			self::faceGrinTears(),
			self::faceGrinTongue(),
			self::faceGrinTongueSquint(),
			self::faceGrinTongueWink(),
			self::faceGrinWide(),
			self::faceGrinWink(),
			self::faceKiss(),
			self::faceKissBeam(),
			self::faceKissWinkHeart(),
			self::faceLaugh(),
			self::faceLaughBeam(),
			self::faceLaughSquint(),
			self::faceLaughWink(),
			self::faceMeh(),
			self::faceMehBlank(),
			self::faceRollingEyes(),
			self::faceSadCry(),
			self::faceSadTear(),
			self::faceSmile(),
			self::faceSmileBeam(),
			self::faceSmileWink(),
			self::faceSurprise(),
			self::faceTired(),
			self::fan(),
			self::faucet(),
			self::faucetDrip(),
			self::fax(),
			self::feather(),
			self::featherPointed(),
			self::ferry(),
			self::file(),
			self::fileArrowDown(),
			self::fileArrowUp(),
			self::fileAudio(),
			self::fileCircleCheck(),
			self::fileCircleExclamation(),
			self::fileCircleMinus(),
			self::fileCirclePlus(),
			self::fileCircleQuestion(),
			self::fileCircleXmark(),
			self::fileCode(),
			self::fileContract(),
			self::fileCsv(),
			self::fileExcel(),
			self::fileExport(),
			self::fileImage(),
			self::fileImport(),
			self::fileInvoice(),
			self::fileInvoiceDollar(),
			self::fileLines(),
			self::fileMedical(),
			self::filePdf(),
			self::filePen(),
			self::filePowerpoint(),
			self::filePrescription(),
			self::fileShield(),
			self::fileSignature(),
			self::fileVideo(),
			self::fileWaveform(),
			self::fileWord(),
			self::fileZipper(),
			self::fill(),
			self::fillDrip(),
			self::film(),
			self::filter(),
			self::filterCircleDollar(),
			self::filterCircleXmark(),
			self::fingerprint(),
			self::fire(),
			self::fireBurner(),
			self::fireExtinguisher(),
			self::fireFlameCurved(),
			self::fireFlameSimple(),
			self::fish(),
			self::fishFins(),
			self::flag(),
			self::flagCheckered(),
			self::flagUsa(),
			self::flask(),
			self::flaskVial(),
			self::floppyDisk(),
			self::florinSign(),
			self::folder(),
			self::folderClosed(),
			self::folderMinus(),
			self::folderOpen(),
			self::folderPlus(),
			self::folderTree(),
			self::font(),
			self::fontAwesome(),
			self::football(),
			self::forward(),
			self::forwardFast(),
			self::forwardStep(),
			self::francSign(),
			self::frog(),
			self::futbol(),
			self::g(),
			self::gamepad(),
			self::gasPump(),
			self::gauge(),
			self::gaugeHigh(),
			self::gaugeSimple(),
			self::gaugeSimpleHigh(),
			self::gavel(),
			self::gear(),
			self::gears(),
			self::gem(),
			self::genderless(),
			self::ghost(),
			self::gift(),
			self::gifts(),
			self::glassWater(),
			self::glassWaterDroplet(),
			self::glasses(),
			self::globe(),
			self::golfBallTee(),
			self::gopuram(),
			self::graduationCap(),
			self::greaterThan(),
			self::greaterThanEqual(),
			self::grip(),
			self::gripLines(),
			self::gripLinesVertical(),
			self::gripVertical(),
			self::groupArrowsRotate(),
			self::guaraniSign(),
			self::guitar(),
			self::gun(),
			self::h(),
			self::hammer(),
			self::hamsa(),
			self::hand(),
			self::handBackFist(),
			self::handDots(),
			self::handFist(),
			self::handHolding(),
			self::handHoldingDollar(),
			self::handHoldingDroplet(),
			self::handHoldingHand(),
			self::handHoldingHeart(),
			self::handHoldingMedical(),
			self::handLizard(),
			self::handMiddleFinger(),
			self::handPeace(),
			self::handPointDown(),
			self::handPointLeft(),
			self::handPointRight(),
			self::handPointUp(),
			self::handPointer(),
			self::handScissors(),
			self::handSparkles(),
			self::handSpock(),
			self::handcuffs(),
			self::hands(),
			self::handsAslInterpreting(),
			self::handsBound(),
			self::handsBubbles(),
			self::handsClapping(),
			self::handsHolding(),
			self::handsHoldingChild(),
			self::handsHoldingCircle(),
			self::handsPraying(),
			self::handshake(),
			self::handshakeAngle(),
			self::handshakeSimple(),
			self::handshakeSimpleSlash(),
			self::handshakeSlash(),
			self::hanukiah(),
			self::hardDrive(),
			self::hashtag(),
			self::hatCowboy(),
			self::hatCowboySide(),
			self::hatWizard(),
			self::headSideCough(),
			self::headSideCoughSlash(),
			self::headSideMask(),
			self::headSideVirus(),
			self::heading(),
			self::headphones(),
			self::headphonesSimple(),
			self::headset(),
			self::heart(),
			self::heartCircleBolt(),
			self::heartCircleCheck(),
			self::heartCircleExclamation(),
			self::heartCircleMinus(),
			self::heartCirclePlus(),
			self::heartCircleXmark(),
			self::heartCrack(),
			self::heartPulse(),
			self::helicopter(),
			self::helicopterSymbol(),
			self::helmetSafety(),
			self::helmetUn(),
			self::highlighter(),
			self::hillAvalanche(),
			self::hillRockslide(),
			self::hippo(),
			self::hockeyPuck(),
			self::hollyBerry(),
			self::horse(),
			self::horseHead(),
			self::hospital(),
			self::hospitalUser(),
			self::hotTubPerson(),
			self::hotdog(),
			self::hotel(),
			self::hourglass(),
			self::hourglassEnd(),
			self::hourglassHalf(),
			self::hourglassStart(),
			self::house(),
			self::houseChimney(),
			self::houseChimneyCrack(),
			self::houseChimneyMedical(),
			self::houseChimneyUser(),
			self::houseChimneyWindow(),
			self::houseCircleCheck(),
			self::houseCircleExclamation(),
			self::houseCircleXmark(),
			self::houseCrack(),
			self::houseFire(),
			self::houseFlag(),
			self::houseFloodWater(),
			self::houseFloodWaterCircleArrowRight(),
			self::houseLaptop(),
			self::houseLock(),
			self::houseMedical(),
			self::houseMedicalCircleCheck(),
			self::houseMedicalCircleExclamation(),
			self::houseMedicalCircleXmark(),
			self::houseMedicalFlag(),
			self::houseSignal(),
			self::houseTsunami(),
			self::houseUser(),
			self::hryvniaSign(),
			self::hurricane(),
			self::i(),
			self::iCursor(),
			self::iceCream(),
			self::icicles(),
			self::icons(),
			self::idBadge(),
			self::idCard(),
			self::idCardClip(),
			self::igloo(),
			self::image(),
			self::imagePortrait(),
			self::images(),
			self::inbox(),
			self::indent(),
			self::indianRupeeSign(),
			self::industry(),
			self::infinity(),
			self::info(),
			self::italic(),
			self::j(),
			self::jar(),
			self::jarWheat(),
			self::jedi(),
			self::jetFighter(),
			self::jetFighterUp(),
			self::joint(),
			self::jugDetergent(),
			self::k(),
			self::kaaba(),
			self::key(),
			self::keyboard(),
			self::khanda(),
			self::kipSign(),
			self::kitMedical(),
			self::kitchenSet(),
			self::kiwiBird(),
			self::l(),
			self::landMineOn(),
			self::landmark(),
			self::landmarkDome(),
			self::landmarkFlag(),
			self::language(),
			self::laptop(),
			self::laptopCode(),
			self::laptopFile(),
			self::laptopMedical(),
			self::lariSign(),
			self::layerGroup(),
			self::leaf(),
			self::leftLong(),
			self::leftRight(),
			self::lemon(),
			self::lessThan(),
			self::lessThanEqual(),
			self::lifeRing(),
			self::lightbulb(),
			self::linesLeaning(),
			self::link(),
			self::linkSlash(),
			self::liraSign(),
			self::list(),
			self::listCheck(),
			self::listOl(),
			self::listUl(),
			self::litecoinSign(),
			self::locationArrow(),
			self::locationCrosshairs(),
			self::locationDot(),
			self::locationPin(),
			self::locationPinLock(),
			self::lock(),
			self::lockOpen(),
			self::locust(),
			self::lungs(),
			self::lungsVirus(),
			self::m(),
			self::magnet(),
			self::magnifyingGlass(),
			self::magnifyingGlassArrowRight(),
			self::magnifyingGlassChart(),
			self::magnifyingGlassDollar(),
			self::magnifyingGlassLocation(),
			self::magnifyingGlassMinus(),
			self::magnifyingGlassPlus(),
			self::manatSign(),
			self::map(),
			self::mapLocation(),
			self::mapLocationDot(),
			self::mapPin(),
			self::marker(),
			self::mars(),
			self::marsAndVenus(),
			self::marsAndVenusBurst(),
			self::marsDouble(),
			self::marsStroke(),
			self::marsStrokeRight(),
			self::marsStrokeUp(),
			self::martiniGlass(),
			self::martiniGlassCitrus(),
			self::martiniGlassEmpty(),
			self::mask(),
			self::maskFace(),
			self::maskVentilator(),
			self::masksTheater(),
			self::mattressPillow(),
			self::maximize(),
			self::medal(),
			self::memory(),
			self::menorah(),
			self::mercury(),
			self::message(),
			self::meteor(),
			self::microchip(),
			self::microphone(),
			self::microphoneLines(),
			self::microphoneLinesSlash(),
			self::microphoneSlash(),
			self::microscope(),
			self::millSign(),
			self::minimize(),
			self::minus(),
			self::mitten(),
			self::mobile(),
			self::mobileButton(),
			self::mobileRetro(),
			self::mobileScreen(),
			self::mobileScreenButton(),
			self::moneyBill(),
			self::moneyBill1(),
			self::moneyBill1Wave(),
			self::moneyBillTransfer(),
			self::moneyBillTrendUp(),
			self::moneyBillWave(),
			self::moneyBillWheat(),
			self::moneyBills(),
			self::moneyCheck(),
			self::moneyCheckDollar(),
			self::monument(),
			self::moon(),
			self::mortarPestle(),
			self::mosque(),
			self::mosquito(),
			self::mosquitoNet(),
			self::motorcycle(),
			self::mound(),
			self::mountain(),
			self::mountainCity(),
			self::mountainSun(),
			self::mugHot(),
			self::mugSaucer(),
			self::music(),
			self::n(),
			self::nairaSign(),
			self::networkWired(),
			self::neuter(),
			self::newspaper(),
			self::notEqual(),
			self::notdef(),
			self::noteSticky(),
			self::notesMedical(),
			self::o(),
			self::objectGroup(),
			self::objectUngroup(),
			self::oilCan(),
			self::oilWell(),
			self::om(),
			self::otter(),
			self::outdent(),
			self::p(),
			self::pager(),
			self::paintRoller(),
			self::paintbrush(),
			self::palette(),
			self::pallet(),
			self::panorama(),
			self::paperPlane(),
			self::paperclip(),
			self::parachuteBox(),
			self::paragraph(),
			self::passport(),
			self::paste(),
			self::pause(),
			self::paw(),
			self::peace(),
			self::pen(),
			self::penClip(),
			self::penFancy(),
			self::penNib(),
			self::penRuler(),
			self::penToSquare(),
			self::pencil(),
			self::peopleArrows(),
			self::peopleCarryBox(),
			self::peopleGroup(),
			self::peopleLine(),
			self::peoplePulling(),
			self::peopleRobbery(),
			self::peopleRoof(),
			self::pepperHot(),
			self::percent(),
			self::person(),
			self::personArrowDownToLine(),
			self::personArrowUpFromLine(),
			self::personBiking(),
			self::personBooth(),
			self::personBreastfeeding(),
			self::personBurst(),
			self::personCane(),
			self::personChalkboard(),
			self::personCircleCheck(),
			self::personCircleExclamation(),
			self::personCircleMinus(),
			self::personCirclePlus(),
			self::personCircleQuestion(),
			self::personCircleXmark(),
			self::personDigging(),
			self::personDotsFromLine(),
			self::personDress(),
			self::personDressBurst(),
			self::personDrowning(),
			self::personFalling(),
			self::personFallingBurst(),
			self::personHalfDress(),
			self::personHarassing(),
			self::personHiking(),
			self::personMilitaryPointing(),
			self::personMilitaryRifle(),
			self::personMilitaryToPerson(),
			self::personPraying(),
			self::personPregnant(),
			self::personRays(),
			self::personRifle(),
			self::personRunning(),
			self::personShelter(),
			self::personSkating(),
			self::personSkiing(),
			self::personSkiingNordic(),
			self::personSnowboarding(),
			self::personSwimming(),
			self::personThroughWindow(),
			self::personWalking(),
			self::personWalkingArrowLoopLeft(),
			self::personWalkingArrowRight(),
			self::personWalkingDashedLineArrowRight(),
			self::personWalkingLuggage(),
			self::personWalkingWithCane(),
			self::pesetaSign(),
			self::pesoSign(),
			self::phone(),
			self::phoneFlip(),
			self::phoneSlash(),
			self::phoneVolume(),
			self::photoFilm(),
			self::piggyBank(),
			self::pills(),
			self::pizzaSlice(),
			self::placeOfWorship(),
			self::plane(),
			self::planeArrival(),
			self::planeCircleCheck(),
			self::planeCircleExclamation(),
			self::planeCircleXmark(),
			self::planeDeparture(),
			self::planeLock(),
			self::planeSlash(),
			self::planeUp(),
			self::plantWilt(),
			self::plateWheat(),
			self::play(),
			self::plug(),
			self::plugCircleBolt(),
			self::plugCircleCheck(),
			self::plugCircleExclamation(),
			self::plugCircleMinus(),
			self::plugCirclePlus(),
			self::plugCircleXmark(),
			self::plus(),
			self::plusMinus(),
			self::podcast(),
			self::poo(),
			self::pooStorm(),
			self::poop(),
			self::powerOff(),
			self::prescription(),
			self::prescriptionBottle(),
			self::prescriptionBottleMedical(),
			self::print(),
			self::pumpMedical(),
			self::pumpSoap(),
			self::puzzlePiece(),
			self::q(),
			self::qrcode(),
			self::question(),
			self::quoteLeft(),
			self::quoteRight(),
			self::r(),
			self::radiation(),
			self::radio(),
			self::rainbow(),
			self::rankingStar(),
			self::receipt(),
			self::recordVinyl(),
			self::rectangleAd(),
			self::rectangleList(),
			self::rectangleXmark(),
			self::recycle(),
			self::registered(),
			self::repeat(),
			self::reply(),
			self::replyAll(),
			self::republican(),
			self::restroom(),
			self::retweet(),
			self::ribbon(),
			self::rightFromBracket(),
			self::rightLeft(),
			self::rightLong(),
			self::rightToBracket(),
			self::ring(),
			self::road(),
			self::roadBarrier(),
			self::roadBridge(),
			self::roadCircleCheck(),
			self::roadCircleExclamation(),
			self::roadCircleXmark(),
			self::roadLock(),
			self::roadSpikes(),
			self::robot(),
			self::rocket(),
			self::rotate(),
			self::rotateLeft(),
			self::rotateRight(),
			self::route(),
			self::rss(),
			self::rubleSign(),
			self::rug(),
			self::ruler(),
			self::rulerCombined(),
			self::rulerHorizontal(),
			self::rulerVertical(),
			self::rupeeSign(),
			self::rupiahSign(),
			self::s(),
			self::sackDollar(),
			self::sackXmark(),
			self::sailboat(),
			self::satellite(),
			self::satelliteDish(),
			self::scaleBalanced(),
			self::scaleUnbalanced(),
			self::scaleUnbalancedFlip(),
			self::school(),
			self::schoolCircleCheck(),
			self::schoolCircleExclamation(),
			self::schoolCircleXmark(),
			self::schoolFlag(),
			self::schoolLock(),
			self::scissors(),
			self::screwdriver(),
			self::screwdriverWrench(),
			self::scroll(),
			self::scrollTorah(),
			self::sdCard(),
			self::section(),
			self::seedling(),
			self::server(),
			self::shapes(),
			self::share(),
			self::shareFromSquare(),
			self::shareNodes(),
			self::sheetPlastic(),
			self::shekelSign(),
			self::shield(),
			self::shieldCat(),
			self::shieldDog(),
			self::shieldHalved(),
			self::shieldHeart(),
			self::shieldVirus(),
			self::ship(),
			self::shirt(),
			self::shoePrints(),
			self::shop(),
			self::shopLock(),
			self::shopSlash(),
			self::shower(),
			self::shrimp(),
			self::shuffle(),
			self::shuttleSpace(),
			self::signHanging(),
			self::signal(),
			self::signature(),
			self::signsPost(),
			self::simCard(),
			self::sink(),
			self::sitemap(),
			self::skull(),
			self::skullCrossbones(),
			self::slash(),
			self::sleigh(),
			self::sliders(),
			self::smog(),
			self::smoking(),
			self::snowflake(),
			self::snowman(),
			self::snowplow(),
			self::soap(),
			self::socks(),
			self::solarPanel(),
			self::sort(),
			self::sortDown(),
			self::sortUp(),
			self::spa(),
			self::spaghettiMonsterFlying(),
			self::spellCheck(),
			self::spider(),
			self::spinner(),
			self::splotch(),
			self::spoon(),
			self::sprayCan(),
			self::sprayCanSparkles(),
			self::square(),
			self::squareArrowUpRight(),
			self::squareCaretDown(),
			self::squareCaretLeft(),
			self::squareCaretRight(),
			self::squareCaretUp(),
			self::squareCheck(),
			self::squareEnvelope(),
			self::squareFull(),
			self::squareH(),
			self::squareMinus(),
			self::squareNfi(),
			self::squareParking(),
			self::squarePen(),
			self::squarePersonConfined(),
			self::squarePhone(),
			self::squarePhoneFlip(),
			self::squarePlus(),
			self::squarePollHorizontal(),
			self::squarePollVertical(),
			self::squareRootVariable(),
			self::squareRss(),
			self::squareShareNodes(),
			self::squareUpRight(),
			self::squareVirus(),
			self::squareXmark(),
			self::staffSnake(),
			self::stairs(),
			self::stamp(),
			self::stapler(),
			self::star(),
			self::starAndCrescent(),
			self::starHalf(),
			self::starHalfStroke(),
			self::starOfDavid(),
			self::starOfLife(),
			self::sterlingSign(),
			self::stethoscope(),
			self::stop(),
			self::stopwatch(),
			self::stopwatch20(),
			self::store(),
			self::storeSlash(),
			self::streetView(),
			self::strikethrough(),
			self::stroopwafel(),
			self::subscript(),
			self::suitcase(),
			self::suitcaseMedical(),
			self::suitcaseRolling(),
			self::sun(),
			self::sunPlantWilt(),
			self::superscript(),
			self::swatchbook(),
			self::synagogue(),
			self::syringe(),
			self::t(),
			self::table(),
			self::tableCells(),
			self::tableCellsLarge(),
			self::tableColumns(),
			self::tableList(),
			self::tableTennisPaddleBall(),
			self::tablet(),
			self::tabletButton(),
			self::tabletScreenButton(),
			self::tablets(),
			self::tachographDigital(),
			self::tag(),
			self::tags(),
			self::tape(),
			self::tarp(),
			self::tarpDroplet(),
			self::taxi(),
			self::teeth(),
			self::teethOpen(),
			self::temperatureArrowDown(),
			self::temperatureArrowUp(),
			self::temperatureEmpty(),
			self::temperatureFull(),
			self::temperatureHalf(),
			self::temperatureHigh(),
			self::temperatureLow(),
			self::temperatureQuarter(),
			self::temperatureThreeQuarters(),
			self::tengeSign(),
			self::tent(),
			self::tentArrowDownToLine(),
			self::tentArrowLeftRight(),
			self::tentArrowTurnLeft(),
			self::tentArrowsDown(),
			self::tents(),
			self::terminal(),
			self::textHeight(),
			self::textSlash(),
			self::textWidth(),
			self::thermometer(),
			self::thumbsDown(),
			self::thumbsUp(),
			self::thumbtack(),
			self::ticket(),
			self::ticketSimple(),
			self::timeline(),
			self::toggleOff(),
			self::toggleOn(),
			self::toilet(),
			self::toiletPaper(),
			self::toiletPaperSlash(),
			self::toiletPortable(),
			self::toiletsPortable(),
			self::toolbox(),
			self::tooth(),
			self::toriiGate(),
			self::tornado(),
			self::towerBroadcast(),
			self::towerCell(),
			self::towerObservation(),
			self::tractor(),
			self::trademark(),
			self::trafficLight(),
			self::trailer(),
			self::train(),
			self::trainSubway(),
			self::trainTram(),
			self::transgender(),
			self::trash(),
			self::trashArrowUp(),
			self::trashCan(),
			self::trashCanArrowUp(),
			self::tree(),
			self::treeCity(),
			self::triangleExclamation(),
			self::trophy(),
			self::trowel(),
			self::trowelBricks(),
			self::truck(),
			self::truckArrowRight(),
			self::truckDroplet(),
			self::truckFast(),
			self::truckField(),
			self::truckFieldUn(),
			self::truckFront(),
			self::truckMedical(),
			self::truckMonster(),
			self::truckMoving(),
			self::truckPickup(),
			self::truckPlane(),
			self::truckRampBox(),
			self::tty(),
			self::turkishLiraSign(),
			self::turnDown(),
			self::turnUp(),
			self::tv(),
			self::u(),
			self::umbrella(),
			self::umbrellaBeach(),
			self::underline(),
			self::universalAccess(),
			self::unlock(),
			self::unlockKeyhole(),
			self::upDown(),
			self::upDownLeftRight(),
			self::upLong(),
			self::upRightAndDownLeftFromCenter(),
			self::upRightFromSquare(),
			self::upload(),
			self::user(),
			self::userAstronaut(),
			self::userCheck(),
			self::userClock(),
			self::userDoctor(),
			self::userGear(),
			self::userGraduate(),
			self::userGroup(),
			self::userInjured(),
			self::userLarge(),
			self::userLargeSlash(),
			self::userLock(),
			self::userMinus(),
			self::userNinja(),
			self::userNurse(),
			self::userPen(),
			self::userPlus(),
			self::userSecret(),
			self::userShield(),
			self::userSlash(),
			self::userTag(),
			self::userTie(),
			self::userXmark(),
			self::users(),
			self::usersBetweenLines(),
			self::usersGear(),
			self::usersLine(),
			self::usersRays(),
			self::usersRectangle(),
			self::usersSlash(),
			self::usersViewfinder(),
			self::utensils(),
			self::v(),
			self::vanShuttle(),
			self::vault(),
			self::vectorSquare(),
			self::venus(),
			self::venusDouble(),
			self::venusMars(),
			self::vest(),
			self::vestPatches(),
			self::vial(),
			self::vialCircleCheck(),
			self::vialVirus(),
			self::vials(),
			self::video(),
			self::videoSlash(),
			self::vihara(),
			self::virus(),
			self::virusCovid(),
			self::virusCovidSlash(),
			self::virusSlash(),
			self::viruses(),
			self::voicemail(),
			self::volcano(),
			self::volleyball(),
			self::volumeHigh(),
			self::volumeLow(),
			self::volumeOff(),
			self::volumeXmark(),
			self::vrCardboard(),
			self::w(),
			self::walkieTalkie(),
			self::wallet(),
			self::wandMagic(),
			self::wandMagicSparkles(),
			self::wandSparkles(),
			self::warehouse(),
			self::water(),
			self::waterLadder(),
			self::waveSquare(),
			self::weightHanging(),
			self::weightScale(),
			self::wheatAwn(),
			self::wheatAwnCircleExclamation(),
			self::wheelchair(),
			self::wheelchairMove(),
			self::whiskeyGlass(),
			self::wifi(),
			self::wind(),
			self::windowMaximize(),
			self::windowMinimize(),
			self::windowRestore(),
			self::wineBottle(),
			self::wineGlass(),
			self::wineGlassEmpty(),
			self::wonSign(),
			self::worm(),
			self::wrench(),
			self::x(),
			self::xRay(),
			self::xmark(),
			self::xmarksLines(),
			self::y(),
			self::yenSign(),
			self::yinYang(),
			self::z(),

		];
	}

	public static function emptyIcon(): self { return (new KornIcon(""))->setEmpty(); }
	private function setEmpty(): self {
		$this->isEmpty = true;

		return $this;
	}

	//region PAGE 1
	public static function n0(): self { return new KornIcon("0"); }
	public static function n1(): self { return new KornIcon("1"); }
	public static function n2(): self { return new KornIcon("2"); }
	public static function n3(): self { return new KornIcon("3"); }
	public static function n4(): self { return new KornIcon("4"); }
	public static function n5(): self { return new KornIcon("5"); }
	public static function n6(): self { return new KornIcon("6"); }
	public static function n7(): self { return new KornIcon("7"); }
	public static function n8(): self { return new KornIcon("8"); }
	public static function n9(): self { return new KornIcon("9"); }
	public static function a(): self { return new KornIcon("a"); }
	public static function addressBook(): self { return new KornIcon("address-book"); }
	public static function addressCard(): self { return new KornIcon("address-card"); }
	public static function alignCenter(): self { return new KornIcon("align-center"); }
	public static function alignJustify(): self { return new KornIcon("align-justify"); }
	public static function alignLeft(): self { return new KornIcon("align-left"); }
	public static function alignRight(): self { return new KornIcon("align-right"); }
	public static function anchor(): self { return new KornIcon("anchor"); }
	public static function anchorCircleCheck(): self { return new KornIcon("anchor-circle-check"); }
	public static function anchorCircleExclamation(): self { return new KornIcon("anchor-circle-exclamation"); }
	public static function anchorCircleXmark(): self { return new KornIcon("anchor-circle-xmark"); }
	public static function anchorLock(): self { return new KornIcon("anchor-lock"); }
	public static function angleDown(): self { return new KornIcon("angle-down"); }
	public static function angleLeft(): self { return new KornIcon("angle-left"); }
	public static function angleRight(): self { return new KornIcon("angle-right"); }
	public static function angleUp(): self { return new KornIcon("angle-up"); }
	public static function anglesDown(): self { return new KornIcon("angles-down"); }
	public static function anglesLeft(): self { return new KornIcon("angles-left"); }
	public static function anglesRight(): self { return new KornIcon("angles-right"); }
	public static function anglesUp(): self { return new KornIcon("angles-up"); }
	public static function ankh(): self { return new KornIcon("ankh"); }
	public static function appleWhole(): self { return new KornIcon("apple-whole"); }
	public static function archway(): self { return new KornIcon("archway"); }
	public static function arrowDown(): self { return new KornIcon("arrow-down"); }
	public static function arrowDown1to9(): self { return new KornIcon("arrow-down-1-9"); }
	public static function arrowDown9to1(): self { return new KornIcon("arrow-down-9-1"); }
	public static function arrowDownAtoZ(): self { return new KornIcon("arrow-down-a-z"); }
	public static function arrowDownLong(): self { return new KornIcon("arrow-down-long"); }
	public static function arrowDownShortWide(): self { return new KornIcon("arrow-down-short-wide"); }
	public static function arrowDownUpAcrossLine(): self { return new KornIcon("arrow-down-up-across-line"); }
	public static function arrowDownUpLock(): self { return new KornIcon("arrow-down-up-lock"); }
	public static function arrowDownWideShort(): self { return new KornIcon("arrow-down-wide-short"); }
	public static function arrowDownZtoA(): self { return new KornIcon("arrow-down-z-a"); }
	public static function arrowLeft(): self { return new KornIcon("arrow-left"); }
	public static function arrowLeftLong(): self { return new KornIcon("arrow-left-long"); }
	public static function arrowPointer(): self { return new KornIcon("arrow-pointer"); }
	public static function arrowRight(): self { return new KornIcon("arrow-right"); }
	public static function arrowRightArrowLeft(): self { return new KornIcon("arrow-right-arrow-left"); }
	public static function arrowRightFromBracket(): self { return new KornIcon("arrow-right-from-bracket"); }
	public static function arrowRightLong(): self { return new KornIcon("arrow-right-long"); }
	public static function arrowRightToBracket(): self { return new KornIcon("arrow-right-to-bracket"); }
	public static function arrowRightToCity(): self { return new KornIcon("arrow-right-to-city"); }
	public static function arrowRotateLeft(): self { return new KornIcon("arrow-rotate-left"); }
	public static function arrowRotateRight(): self { return new KornIcon("arrow-rotate-right"); }
	public static function arrowTrendDown(): self { return new KornIcon("arrow-trend-down"); }
	public static function arrowTrendUp(): self { return new KornIcon("arrow-trend-up"); }
	public static function arrowTurnDown(): self { return new KornIcon("arrow-turn-down"); }
	public static function arrowTurnUp(): self { return new KornIcon("arrow-turn-up"); }
	public static function arrowUp(): self { return new KornIcon("arrow-up"); }
	public static function arrowUp1to9(): self { return new KornIcon("arrow-up-1-9"); }
	public static function arrowUp9to1(): self { return new KornIcon("arrow-up-9-1"); }
	public static function arrowUpAtoZ(): self { return new KornIcon("arrow-up-a-z"); }
	public static function arrowUpFromBracket(): self { return new KornIcon("arrow-up-from-bracket"); }
	public static function arrowUpFromGroundWater(): self { return new KornIcon("arrow-up-from-ground-water"); }
	public static function arrowUpFromWaterPump(): self { return new KornIcon("arrow-up-from-water-pump"); }
	public static function arrowUpLong(): self { return new KornIcon("arrow-up-long"); }
	public static function arrowUpRightDots(): self { return new KornIcon("arrow-up-right-dots"); }
	public static function arrowUpRightFromSquare(): self { return new KornIcon("arrow-up-right-from-square"); }
	public static function arrowUpShortWide(): self { return new KornIcon("arrow-up-short-wide"); }
	public static function arrowUpWideShort(): self { return new KornIcon("arrow-up-wide-short"); }
	public static function arrowUpZtoA(): self { return new KornIcon("arrow-up-z-a"); }
	public static function arrowsDownToLine(): self { return new KornIcon("arrows-down-to-line"); }
	public static function arrowsDownToPeople(): self { return new KornIcon("arrows-down-to-people"); }
	public static function arrowsLeftRight(): self { return new KornIcon("arrows-left-right"); }
	public static function arrowsLeftRightToLine(): self { return new KornIcon("arrows-left-right-to-line"); }
	public static function arrowsRotate(): self { return new KornIcon("arrows-rotate"); }
	public static function arrowsSpin(): self { return new KornIcon("arrows-spin"); }
	public static function arrowsSplitUpAndLeft(): self { return new KornIcon("arrows-split-up-and-left"); }
	public static function arrowsToCircle(): self { return new KornIcon("arrows-to-circle"); }
	public static function arrowsToDot(): self { return new KornIcon("arrows-to-dot"); }
	public static function arrowsToEye(): self { return new KornIcon("arrows-to-eye"); }
	public static function arrowsTurnRight(): self { return new KornIcon("arrows-turn-right"); }
	public static function arrowsTurnToDots(): self { return new KornIcon("arrows-turn-to-dots"); }
	public static function arrowsUpDown(): self { return new KornIcon("arrows-up-down"); }
	public static function arrowsUpDownLeftRight(): self { return new KornIcon("arrows-up-down-left-right"); }
	public static function arrowsUpToLine(): self { return new KornIcon("arrows-up-to-line"); }
	public static function asterisk(): self { return new KornIcon("asterisk"); }
	public static function at(): self { return new KornIcon("at"); }
	public static function atom(): self { return new KornIcon("atom"); }
	public static function audioDescription(): self { return new KornIcon("audio-description"); }
	public static function australSign(): self { return new KornIcon("austral-sign"); }
	public static function award(): self { return new KornIcon("award"); }
	public static function b(): self { return new KornIcon("b"); }
	public static function baby(): self { return new KornIcon("baby"); }
	public static function babyCarriage(): self { return new KornIcon("baby-carriage"); }
	public static function backward(): self { return new KornIcon("backward"); }
	public static function backwardFast(): self { return new KornIcon("backward-fast"); }
	public static function backwardStep(): self { return new KornIcon("backward-step"); }
	public static function bacon(): self { return new KornIcon("bacon"); }
	public static function bacteria(): self { return new KornIcon("bacteria"); }
	public static function bacterium(): self { return new KornIcon("bacterium"); }
	public static function bagShopping(): self { return new KornIcon("bag-shopping"); }
	public static function bahai(): self { return new KornIcon("bahai"); }
	public static function bahtSign(): self { return new KornIcon("baht-sign"); }
	public static function ban(): self { return new KornIcon("ban"); }
	public static function banSmoking(): self { return new KornIcon("ban-smoking"); }
	public static function bandage(): self { return new KornIcon("bandage"); }
	public static function bangladeshiTakaSign(): self { return new KornIcon("bangladeshi-taka-sign"); }
	public static function barcode(): self { return new KornIcon("barcode"); }
	public static function bars(): self { return new KornIcon("bars"); }
	public static function barsProgress(): self { return new KornIcon("bars-progress"); }
	public static function barsStaggered(): self { return new KornIcon("bars-staggered"); }
	public static function baseball(): self { return new KornIcon("baseball"); }
	public static function baseballBatBall(): self { return new KornIcon("baseball-bat-ball"); }
	public static function basketShopping(): self { return new KornIcon("basket-shopping"); }
	public static function basketball(): self { return new KornIcon("basketball"); }
	public static function bath(): self { return new KornIcon("bath"); }
	public static function batteryEmpty(): self { return new KornIcon("battery-empty"); }
	public static function batteryFull(): self { return new KornIcon("battery-full"); }
	public static function batteryHalf(): self { return new KornIcon("battery-half"); }
	public static function batteryQuarter(): self { return new KornIcon("battery-quarter"); }
	public static function batteryThreeQuarters(): self { return new KornIcon("battery-three-quarters"); }
	public static function bed(): self { return new KornIcon("bed"); }
	public static function bedPulse(): self { return new KornIcon("bed-pulse"); }
	public static function beerMugEmpty(): self { return new KornIcon("beer-mug-empty"); }
	public static function bell(): self { return new KornIcon("bell"); }
	public static function bellConcierge(): self { return new KornIcon("bell-concierge"); }
	public static function bellSlash(): self { return new KornIcon("bell-slash"); }
	public static function bezierCurve(): self { return new KornIcon("bezier-curve"); }
	public static function bicycle(): self { return new KornIcon("bicycle"); }
	public static function binoculars(): self { return new KornIcon("binoculars"); }
	public static function biohazard(): self { return new KornIcon("biohazard"); }
	public static function bitcoinSign(): self { return new KornIcon("bitcoin-sign"); }
	public static function blender(): self { return new KornIcon("blender"); }
	public static function blenderPhone(): self { return new KornIcon("blender-phone"); }
	public static function blog(): self { return new KornIcon("blog"); }
	public static function bold(): self { return new KornIcon("bold"); }
	public static function bolt(): self { return new KornIcon("bolt"); }
	public static function boltLightning(): self { return new KornIcon("bolt-lightning"); }
	public static function bomb(): self { return new KornIcon("bomb"); }
	public static function bone(): self { return new KornIcon("bone"); }
	public static function bong(): self { return new KornIcon("bong"); }
	public static function book(): self { return new KornIcon("book"); }
	public static function bookAtlas(): self { return new KornIcon("book-atlas"); }
	public static function bookBible(): self { return new KornIcon("book-bible"); }
	public static function bookBookmark(): self { return new KornIcon("book-bookmark"); }
	public static function bookJournalWhills(): self { return new KornIcon("book-journal-whills"); }
	public static function bookMedical(): self { return new KornIcon("book-medical"); }
	public static function bookOpen(): self { return new KornIcon("book-open"); }
	public static function bookOpenReader(): self { return new KornIcon("book-open-reader"); }
	public static function bookQuran(): self { return new KornIcon("book-quran"); }
	public static function bookSkull(): self { return new KornIcon("book-skull"); }
	public static function bookTanakh(): self { return new KornIcon("book-tanakh"); }
	public static function bookmark(): self { return new KornIcon("bookmark"); }
	public static function borderAll(): self { return new KornIcon("border-all"); }
	public static function borderNone(): self { return new KornIcon("border-none"); }
	public static function borderTopLeft(): self { return new KornIcon("border-top-left"); }
	public static function boreHole(): self { return new KornIcon("bore-hole"); }
	public static function bottleDroplet(): self { return new KornIcon("bottle-droplet"); }
	public static function bottleWater(): self { return new KornIcon("bottle-water"); }
	public static function bowlFood(): self { return new KornIcon("bowl-food"); }
	public static function bowlRice(): self { return new KornIcon("bowl-rice"); }
	public static function bowlingBall(): self { return new KornIcon("bowling-ball"); }
	public static function box(): self { return new KornIcon("box"); }
	public static function boxArchive(): self { return new KornIcon("box-archive"); }
	public static function boxOpen(): self { return new KornIcon("box-open"); }
	public static function boxTissue(): self { return new KornIcon("box-tissue"); }
	public static function boxesPacking(): self { return new KornIcon("boxes-packing"); }
	public static function boxesStacked(): self { return new KornIcon("boxes-stacked"); }
	public static function braille(): self { return new KornIcon("braille"); }
	public static function brain(): self { return new KornIcon("brain"); }
	public static function brazilianRealSign(): self { return new KornIcon("brazilian-real-sign"); }
	public static function breadSlice(): self { return new KornIcon("bread-slice"); }
	public static function bridge(): self { return new KornIcon("bridge"); }
	public static function bridgeCircleCheck(): self { return new KornIcon("bridge-circle-check"); }
	public static function bridgeCircleExclamation(): self { return new KornIcon("bridge-circle-exclamation"); }
	public static function bridgeCircleXmark(): self { return new KornIcon("bridge-circle-xmark"); }
	public static function bridgeLock(): self { return new KornIcon("bridge-lock"); }
	public static function bridgeWater(): self { return new KornIcon("bridge-water"); }
	public static function briefcase(): self { return new KornIcon("briefcase"); }
	//endregion
	//region PAGE 2
	public static function briefcaseMedical(): self { return new KornIcon("briefcase-medical"); }
	public static function broom(): self { return new KornIcon("broom"); }
	public static function broomBall(): self { return new KornIcon("broom-ball"); }
	public static function brush(): self { return new KornIcon("brush"); }
	public static function bucket(): self { return new KornIcon("bucket"); }
	public static function bug(): self { return new KornIcon("bug"); }
	public static function bugSlash(): self { return new KornIcon("bug-slash"); }
	public static function bugs(): self { return new KornIcon("bugs"); }
	public static function building(): self { return new KornIcon("building"); }
	public static function buildingCircleArrowRight(): self { return new KornIcon("building-circle-arrow-right"); }
	public static function buildingCircleCheck(): self { return new KornIcon("building-circle-check"); }
	public static function buildingCircleExclamation(): self { return new KornIcon("building-circle-exclamation"); }
	public static function buildingCircleXmark(): self { return new KornIcon("building-circle-xmark"); }
	public static function buildingColumns(): self { return new KornIcon("building-columns"); }
	public static function buildingFlag(): self { return new KornIcon("building-flag"); }
	public static function buildingLock(): self { return new KornIcon("building-lock"); }
	public static function buildingNgo(): self { return new KornIcon("building-ngo"); }
	public static function buildingShield(): self { return new KornIcon("building-shield"); }
	public static function buildingUn(): self { return new KornIcon("building-un"); }
	public static function buildingUser(): self { return new KornIcon("building-user"); }
	public static function buildingWheat(): self { return new KornIcon("building-wheat"); }
	public static function bullhorn(): self { return new KornIcon("bullhorn"); }
	public static function bullseye(): self { return new KornIcon("bullseye"); }
	public static function burger(): self { return new KornIcon("burger"); }
	public static function burst(): self { return new KornIcon("burst"); }
	public static function bus(): self { return new KornIcon("bus"); }
	public static function busSimple(): self { return new KornIcon("bus-simple"); }
	public static function businessTime(): self { return new KornIcon("business-time"); }
	public static function c(): self { return new KornIcon("c"); }
	public static function cableCar(): self { return new KornIcon("cable-car"); }
	public static function cakeCandles(): self { return new KornIcon("cake-candles"); }
	public static function calculator(): self { return new KornIcon("calculator"); }
	public static function calendar(): self { return new KornIcon("calendar"); }
	public static function calendarCheck(): self { return new KornIcon("calendar-check"); }
	public static function calendarDay(): self { return new KornIcon("calendar-day"); }
	public static function calendarDays(): self { return new KornIcon("calendar-days"); }
	public static function calendarMinus(): self { return new KornIcon("calendar-minus"); }
	public static function calendarPlus(): self { return new KornIcon("calendar-plus"); }
	public static function calendarWeek(): self { return new KornIcon("calendar-week"); }
	public static function calendarXmark(): self { return new KornIcon("calendar-xmark"); }
	public static function camera(): self { return new KornIcon("camera"); }
	public static function cameraRetro(): self { return new KornIcon("camera-retro"); }
	public static function cameraRotate(): self { return new KornIcon("camera-rotate"); }
	public static function campground(): self { return new KornIcon("campground"); }
	public static function candyCane(): self { return new KornIcon("candy-cane"); }
	public static function cannabis(): self { return new KornIcon("cannabis"); }
	public static function capsules(): self { return new KornIcon("capsules"); }
	public static function car(): self { return new KornIcon("car"); }
	public static function carBattery(): self { return new KornIcon("car-battery"); }
	public static function carBurst(): self { return new KornIcon("car-burst"); }
	public static function carOn(): self { return new KornIcon("car-on"); }
	public static function carRear(): self { return new KornIcon("car-rear"); }
	public static function carSide(): self { return new KornIcon("car-side"); }
	public static function carTunnel(): self { return new KornIcon("car-tunnel"); }
	public static function caravan(): self { return new KornIcon("caravan"); }
	public static function caretDown(): self { return new KornIcon("caret-down"); }
	public static function caretLeft(): self { return new KornIcon("caret-left"); }
	public static function caretRight(): self { return new KornIcon("caret-right"); }
	public static function caretUp(): self { return new KornIcon("caret-up"); }
	public static function carrot(): self { return new KornIcon("carrot"); }
	public static function cartArrowDown(): self { return new KornIcon("cart-arrow-down"); }
	public static function cartFlatbed(): self { return new KornIcon("cart-flatbed"); }
	public static function cartFlatbedSuitcase(): self { return new KornIcon("cart-flatbed-suitcase"); }
	public static function cartPlus(): self { return new KornIcon("cart-plus"); }
	public static function cartShopping(): self { return new KornIcon("cart-shopping"); }
	public static function cashRegister(): self { return new KornIcon("cash-register"); }
	public static function cat(): self { return new KornIcon("cat"); }
	public static function cediSign(): self { return new KornIcon("cedi-sign"); }
	public static function centSign(): self { return new KornIcon("cent-sign"); }
	public static function certificate(): self { return new KornIcon("certificate"); }
	public static function chair(): self { return new KornIcon("chair"); }
	public static function chalkboard(): self { return new KornIcon("chalkboard"); }
	public static function chalkboardUser(): self { return new KornIcon("chalkboard-user"); }
	public static function champagneGlasses(): self { return new KornIcon("champagne-glasses"); }
	public static function chargingStation(): self { return new KornIcon("charging-station"); }
	public static function chartArea(): self { return new KornIcon("chart-area"); }
	public static function chartBar(): self { return new KornIcon("chart-bar"); }
	public static function chartColumn(): self { return new KornIcon("chart-column"); }
	public static function chartGantt(): self { return new KornIcon("chart-gantt"); }
	public static function chartLine(): self { return new KornIcon("chart-line"); }
	public static function chartPie(): self { return new KornIcon("chart-pie"); }
	public static function chartSimple(): self { return new KornIcon("chart-simple"); }
	public static function check(): self { return new KornIcon("check"); }
	public static function checkDouble(): self { return new KornIcon("check-double"); }
	public static function checkToSlot(): self { return new KornIcon("check-to-slot"); }
	public static function cheese(): self { return new KornIcon("cheese"); }
	public static function chess(): self { return new KornIcon("chess"); }
	public static function chessBishop(): self { return new KornIcon("chess-bishop"); }
	public static function chessBoard(): self { return new KornIcon("chess-board"); }
	public static function chessKing(): self { return new KornIcon("chess-king"); }
	public static function chessKnight(): self { return new KornIcon("chess-knight"); }
	public static function chessPawn(): self { return new KornIcon("chess-pawn"); }
	public static function chessQueen(): self { return new KornIcon("chess-queen"); }
	public static function chessRook(): self { return new KornIcon("chess-rook"); }
	public static function chevronDown(): self { return new KornIcon("chevron-down"); }
	public static function chevronLeft(): self { return new KornIcon("chevron-left"); }
	public static function chevronRight(): self { return new KornIcon("chevron-right"); }
	public static function chevronUp(): self { return new KornIcon("chevron-up"); }
	public static function child(): self { return new KornIcon("child"); }
	public static function childCombatant(): self { return new KornIcon("child-combatant"); }
	public static function childDress(): self { return new KornIcon("child-dress"); }
	public static function childReaching(): self { return new KornIcon("child-reaching"); }
	public static function children(): self { return new KornIcon("children"); }
	public static function church(): self { return new KornIcon("church"); }
	public static function circle(): self { return new KornIcon("circle"); }
	public static function circleArrowDown(): self { return new KornIcon("circle-arrow-down"); }
	public static function circleArrowLeft(): self { return new KornIcon("circle-arrow-left"); }
	public static function circleArrowRight(): self { return new KornIcon("circle-arrow-right"); }
	public static function circleArrowUp(): self { return new KornIcon("circle-arrow-up"); }
	public static function circleCheck(): self { return new KornIcon("circle-check"); }
	public static function circleChevronDown(): self { return new KornIcon("circle-chevron-down"); }
	public static function circleChevronLeft(): self { return new KornIcon("circle-chevron-left"); }
	public static function circleChevronRight(): self { return new KornIcon("circle-chevron-right"); }
	public static function circleChevronUp(): self { return new KornIcon("circle-chevron-up"); }
	public static function circleDollarToSlot(): self { return new KornIcon("circle-dollar-to-slot"); }
	public static function circleDot(): self { return new KornIcon("circle-dot"); }
	public static function circleDown(): self { return new KornIcon("circle-down"); }
	public static function circleExclamation(): self { return new KornIcon("circle-exclamation"); }
	public static function circleH(): self { return new KornIcon("circle-h"); }
	public static function circleHalfStroke(): self { return new KornIcon("circle-half-stroke"); }
	public static function circleInfo(): self { return new KornIcon("circle-info"); }
	public static function circleLeft(): self { return new KornIcon("circle-left"); }
	public static function circleMinus(): self { return new KornIcon("circle-minus"); }
	public static function circleNodes(): self { return new KornIcon("circle-nodes"); }
	public static function circleNotch(): self { return new KornIcon("circle-notch"); }
	public static function circlePause(): self { return new KornIcon("circle-pause"); }
	public static function circlePlay(): self { return new KornIcon("circle-play"); }
	public static function circlePlus(): self { return new KornIcon("circle-plus"); }
	public static function circleQuestion(): self { return new KornIcon("circle-question"); }
	public static function circleRadiation(): self { return new KornIcon("circle-radiation"); }
	public static function circleRight(): self { return new KornIcon("circle-right"); }
	public static function circleStop(): self { return new KornIcon("circle-stop"); }
	public static function circleUp(): self { return new KornIcon("circle-up"); }
	public static function circleUser(): self { return new KornIcon("circle-user"); }
	public static function circleXmark(): self { return new KornIcon("circle-xmark"); }
	public static function city(): self { return new KornIcon("city"); }
	public static function clapperboard(): self { return new KornIcon("clapperboard"); }
	public static function clipboard(): self { return new KornIcon("clipboard"); }
	public static function clipboardCheck(): self { return new KornIcon("clipboard-check"); }
	public static function clipboardList(): self { return new KornIcon("clipboard-list"); }
	public static function clipboardQuestion(): self { return new KornIcon("clipboard-question"); }
	public static function clipboardUser(): self { return new KornIcon("clipboard-user"); }
	public static function clock(): self { return new KornIcon("clock"); }
	public static function clockRotateLeft(): self { return new KornIcon("clock-rotate-left"); }
	public static function clone(): self { return new KornIcon("clone"); }
	public static function closedCaptioning(): self { return new KornIcon("closed-captioning"); }
	public static function cloud(): self { return new KornIcon("cloud"); }
	public static function cloudArrowDown(): self { return new KornIcon("cloud-arrow-down"); }
	public static function cloudArrowUp(): self { return new KornIcon("cloud-arrow-up"); }
	public static function cloudBolt(): self { return new KornIcon("cloud-bolt"); }
	public static function cloudMeatball(): self { return new KornIcon("cloud-meatball"); }
	public static function cloudMoon(): self { return new KornIcon("cloud-moon"); }
	public static function cloudMoonRain(): self { return new KornIcon("cloud-moon-rain"); }
	public static function cloudRain(): self { return new KornIcon("cloud-rain"); }
	public static function cloudShowersHeavy(): self { return new KornIcon("cloud-showers-heavy"); }
	public static function cloudShowersWater(): self { return new KornIcon("cloud-showers-water"); }
	public static function cloudSun(): self { return new KornIcon("cloud-sun"); }
	public static function cloudSunRain(): self { return new KornIcon("cloud-sun-rain"); }
	public static function clover(): self { return new KornIcon("clover"); }
	public static function code(): self { return new KornIcon("code"); }
	public static function codeBranch(): self { return new KornIcon("code-branch"); }
	public static function codeCommit(): self { return new KornIcon("code-commit"); }
	public static function codeCompare(): self { return new KornIcon("code-compare"); }
	public static function codeFork(): self { return new KornIcon("code-fork"); }
	public static function codeMerge(): self { return new KornIcon("code-merge"); }
	public static function codePullRequest(): self { return new KornIcon("code-pull-request"); }
	public static function coins(): self { return new KornIcon("coins"); }
	public static function colonSign(): self { return new KornIcon("colon-sign"); }
	public static function comment(): self { return new KornIcon("comment"); }
	public static function commentDollar(): self { return new KornIcon("comment-dollar"); }
	public static function commentDots(): self { return new KornIcon("comment-dots"); }
	public static function commentMedical(): self { return new KornIcon("comment-medical"); }
	public static function commentSlash(): self { return new KornIcon("comment-slash"); }
	public static function commentSms(): self { return new KornIcon("comment-sms"); }
	public static function comments(): self { return new KornIcon("comments"); }
	public static function commentsDollar(): self { return new KornIcon("comments-dollar"); }
	public static function compactDisc(): self { return new KornIcon("compact-disc"); }
	public static function compass(): self { return new KornIcon("compass"); }
	public static function compassDrafting(): self { return new KornIcon("compass-drafting"); }
	public static function compress(): self { return new KornIcon("compress"); }
	//endregion
	//region PAGE 3
	public static function computer(): self { return new KornIcon("computer"); }
	public static function computerMouse(): self { return new KornIcon("computer-mouse"); }
	public static function cookie(): self { return new KornIcon("cookie"); }
	public static function cookieBite(): self { return new KornIcon("cookie-bite"); }
	public static function copy(): self { return new KornIcon("copy"); }
	public static function copyright(): self { return new KornIcon("copyright"); }
	public static function couch(): self { return new KornIcon("couch"); }
	public static function cow(): self { return new KornIcon("cow"); }
	public static function creditCard(): self { return new KornIcon("credit-card"); }
	public static function crop(): self { return new KornIcon("crop"); }
	public static function cropSimple(): self { return new KornIcon("crop-simple"); }
	public static function cross(): self { return new KornIcon("cross"); }
	public static function crosshairs(): self { return new KornIcon("crosshairs"); }
	public static function crow(): self { return new KornIcon("crow"); }
	public static function crown(): self { return new KornIcon("crown"); }
	public static function crutch(): self { return new KornIcon("crutch"); }
	public static function cruzeiroSign(): self { return new KornIcon("cruzeiro-sign"); }
	public static function cube(): self { return new KornIcon("cube"); }
	public static function cubes(): self { return new KornIcon("cubes"); }
	public static function cubesStacked(): self { return new KornIcon("cubes-stacked"); }
	public static function d(): self { return new KornIcon("d"); }
	public static function database(): self { return new KornIcon("database"); }
	public static function deleteLeft(): self { return new KornIcon("delete-left"); }
	public static function democrat(): self { return new KornIcon("democrat"); }
	public static function desktop(): self { return new KornIcon("desktop"); }
	public static function dharmachakra(): self { return new KornIcon("dharmachakra"); }
	public static function diagramNext(): self { return new KornIcon("diagram-next"); }
	public static function diagramPredecessor(): self { return new KornIcon("diagram-predecessor"); }
	public static function diagramProject(): self { return new KornIcon("diagram-project"); }
	public static function diagramSuccessor(): self { return new KornIcon("diagram-successor"); }
	public static function diamond(): self { return new KornIcon("diamond"); }
	public static function diamondTurnRight(): self { return new KornIcon("diamond-turn-right"); }
	public static function dice(): self { return new KornIcon("dice"); }
	public static function diceD20(): self { return new KornIcon("dice-d20"); }
	public static function diceD6(): self { return new KornIcon("dice-d6"); }
	public static function diceFive(): self { return new KornIcon("dice-five"); }
	public static function diceFour(): self { return new KornIcon("dice-four"); }
	public static function diceOne(): self { return new KornIcon("dice-one"); }
	public static function diceSix(): self { return new KornIcon("dice-six"); }
	public static function diceThree(): self { return new KornIcon("dice-three"); }
	public static function diceTwo(): self { return new KornIcon("dice-two"); }
	public static function disease(): self { return new KornIcon("disease"); }
	public static function display(): self { return new KornIcon("display"); }
	public static function divide(): self { return new KornIcon("divide"); }
	public static function dna(): self { return new KornIcon("dna"); }
	public static function dog(): self { return new KornIcon("dog"); }
	public static function dollarSign(): self { return new KornIcon("dollar-sign"); }
	public static function dolly(): self { return new KornIcon("dolly"); }
	public static function dongSign(): self { return new KornIcon("dong-sign"); }
	public static function doorClosed(): self { return new KornIcon("door-closed"); }
	public static function doorOpen(): self { return new KornIcon("door-open"); }
	public static function dove(): self { return new KornIcon("dove"); }
	public static function downLeftAndUpRightToCenter(): self { return new KornIcon("down-left-and-up-right-to-center"); }
	public static function downLong(): self { return new KornIcon("down-long"); }
	public static function download(): self { return new KornIcon("download"); }
	public static function dragon(): self { return new KornIcon("dragon"); }
	public static function drawPolygon(): self { return new KornIcon("draw-polygon"); }
	public static function droplet(): self { return new KornIcon("droplet"); }
	public static function dropletSlash(): self { return new KornIcon("droplet-slash"); }
	public static function drum(): self { return new KornIcon("drum"); }
	public static function drumSteelpan(): self { return new KornIcon("drum-steelpan"); }
	public static function drumstickBite(): self { return new KornIcon("drumstick-bite"); }
	public static function dumbbell(): self { return new KornIcon("dumbbell"); }
	public static function dumpster(): self { return new KornIcon("dumpster"); }
	public static function dumpsterFire(): self { return new KornIcon("dumpster-fire"); }
	public static function dungeon(): self { return new KornIcon("dungeon"); }
	public static function e(): self { return new KornIcon("e"); }
	public static function earDeaf(): self { return new KornIcon("ear-deaf"); }
	public static function earListen(): self { return new KornIcon("ear-listen"); }
	public static function earthAfrica(): self { return new KornIcon("earth-africa"); }
	public static function earthAmericas(): self { return new KornIcon("earth-americas"); }
	public static function earthAsia(): self { return new KornIcon("earth-asia"); }
	public static function earthEurope(): self { return new KornIcon("earth-europe"); }
	public static function earthOceania(): self { return new KornIcon("earth-oceania"); }
	public static function egg(): self { return new KornIcon("egg"); }
	public static function eject(): self { return new KornIcon("eject"); }
	public static function elevator(): self { return new KornIcon("elevator"); }
	public static function ellipsis(): self { return new KornIcon("ellipsis"); }
	public static function ellipsisVertical(): self { return new KornIcon("ellipsis-vertical"); }
	public static function envelope(): self { return new KornIcon("envelope"); }
	public static function envelopeCircleCheck(): self { return new KornIcon("envelope-circle-check"); }
	public static function envelopeOpen(): self { return new KornIcon("envelope-open"); }
	public static function envelopeOpenText(): self { return new KornIcon("envelope-open-text"); }
	public static function envelopesBulk(): self { return new KornIcon("envelopes-bulk"); }
	public static function equals(): self { return new KornIcon("equals"); }
	public static function eraser(): self { return new KornIcon("eraser"); }
	public static function ethernet(): self { return new KornIcon("ethernet"); }
	public static function euroSign(): self { return new KornIcon("euro-sign"); }
	public static function exclamation(): self { return new KornIcon("exclamation"); }
	public static function expand(): self { return new KornIcon("expand"); }
	public static function explosion(): self { return new KornIcon("explosion"); }
	public static function eye(): self { return new KornIcon("eye"); }
	public static function eyeDropper(): self { return new KornIcon("eye-dropper"); }
	public static function eyeLowVision(): self { return new KornIcon("eye-low-vision"); }
	public static function eyeSlash(): self { return new KornIcon("eye-slash"); }
	public static function f(): self { return new KornIcon("f"); }
	public static function faceAngry(): self { return new KornIcon("face-angry"); }
	public static function faceDizzy(): self { return new KornIcon("face-dizzy"); }
	public static function faceFlushed(): self { return new KornIcon("face-flushed"); }
	public static function faceFrown(): self { return new KornIcon("face-frown"); }
	public static function faceFrownOpen(): self { return new KornIcon("face-frown-open"); }
	public static function faceGrimace(): self { return new KornIcon("face-grimace"); }
	public static function faceGrin(): self { return new KornIcon("face-grin"); }
	public static function faceGrinBeam(): self { return new KornIcon("face-grin-beam"); }
	public static function faceGrinBeamSweat(): self { return new KornIcon("face-grin-beam-sweat"); }
	public static function faceGrinHearts(): self { return new KornIcon("face-grin-hearts"); }
	public static function faceGrinSquint(): self { return new KornIcon("face-grin-squint"); }
	public static function faceGrinSquintTears(): self { return new KornIcon("face-grin-squint-tears"); }
	public static function faceGrinStars(): self { return new KornIcon("face-grin-stars"); }
	public static function faceGrinTears(): self { return new KornIcon("face-grin-tears"); }
	public static function faceGrinTongue(): self { return new KornIcon("face-grin-tongue"); }
	public static function faceGrinTongueSquint(): self { return new KornIcon("face-grin-tongue-squint"); }
	public static function faceGrinTongueWink(): self { return new KornIcon("face-grin-tongue-wink"); }
	public static function faceGrinWide(): self { return new KornIcon("face-grin-wide"); }
	public static function faceGrinWink(): self { return new KornIcon("face-grin-wink"); }
	public static function faceKiss(): self { return new KornIcon("face-kiss"); }
	public static function faceKissBeam(): self { return new KornIcon("face-kiss-beam"); }
	public static function faceKissWinkHeart(): self { return new KornIcon("face-kiss-wink-heart"); }
	public static function faceLaugh(): self { return new KornIcon("face-laugh"); }
	public static function faceLaughBeam(): self { return new KornIcon("face-laugh-beam"); }
	public static function faceLaughSquint(): self { return new KornIcon("face-laugh-squint"); }
	public static function faceLaughWink(): self { return new KornIcon("face-laugh-wink"); }
	public static function faceMeh(): self { return new KornIcon("face-meh"); }
	public static function faceMehBlank(): self { return new KornIcon("face-meh-blank"); }
	public static function faceRollingEyes(): self { return new KornIcon("face-rolling-eyes"); }
	public static function faceSadCry(): self { return new KornIcon("face-sad-cry"); }
	public static function faceSadTear(): self { return new KornIcon("face-sad-tear"); }
	public static function faceSmile(): self { return new KornIcon("face-smile"); }
	public static function faceSmileBeam(): self { return new KornIcon("face-smile-beam"); }
	public static function faceSmileWink(): self { return new KornIcon("face-smile-wink"); }
	public static function faceSurprise(): self { return new KornIcon("face-surprise"); }
	public static function faceTired(): self { return new KornIcon("face-tired"); }
	public static function fan(): self { return new KornIcon("fan"); }
	public static function faucet(): self { return new KornIcon("faucet"); }
	public static function faucetDrip(): self { return new KornIcon("faucet-drip"); }
	public static function fax(): self { return new KornIcon("fax"); }
	public static function feather(): self { return new KornIcon("feather"); }
	public static function featherPointed(): self { return new KornIcon("feather-pointed"); }
	public static function ferry(): self { return new KornIcon("ferry"); }
	public static function file(): self { return new KornIcon("file"); }
	public static function fileArrowDown(): self { return new KornIcon("file-arrow-down"); }
	public static function fileArrowUp(): self { return new KornIcon("file-arrow-up"); }
	public static function fileAudio(): self { return new KornIcon("file-audio"); }
	public static function fileCircleCheck(): self { return new KornIcon("file-circle-check"); }
	public static function fileCircleExclamation(): self { return new KornIcon("file-circle-exclamation"); }
	public static function fileCircleMinus(): self { return new KornIcon("file-circle-minus"); }
	public static function fileCirclePlus(): self { return new KornIcon("file-circle-plus"); }
	public static function fileCircleQuestion(): self { return new KornIcon("file-circle-question"); }
	public static function fileCircleXmark(): self { return new KornIcon("file-circle-xmark"); }
	public static function fileCode(): self { return new KornIcon("file-code"); }
	public static function fileContract(): self { return new KornIcon("file-contract"); }
	public static function fileCsv(): self { return new KornIcon("file-csv"); }
	public static function fileExcel(): self { return new KornIcon("file-excel"); }
	public static function fileExport(): self { return new KornIcon("file-export"); }
	public static function fileImage(): self { return new KornIcon("file-image"); }
	public static function fileImport(): self { return new KornIcon("file-import"); }
	public static function fileInvoice(): self { return new KornIcon("file-invoice"); }
	public static function fileInvoiceDollar(): self { return new KornIcon("file-invoice-dollar"); }
	public static function fileLines(): self { return new KornIcon("file-lines"); }
	public static function fileMedical(): self { return new KornIcon("file-medical"); }
	public static function filePdf(): self { return new KornIcon("file-pdf"); }
	public static function filePen(): self { return new KornIcon("file-pen"); }
	public static function filePowerpoint(): self { return new KornIcon("file-powerpoint"); }
	public static function filePrescription(): self { return new KornIcon("file-prescription"); }
	public static function fileShield(): self { return new KornIcon("file-shield"); }
	public static function fileSignature(): self { return new KornIcon("file-signature"); }
	public static function fileVideo(): self { return new KornIcon("file-video"); }
	public static function fileWaveform(): self { return new KornIcon("file-waveform"); }
	public static function fileWord(): self { return new KornIcon("file-word"); }
	public static function fileZipper(): self { return new KornIcon("file-zipper"); }
	public static function fill(): self { return new KornIcon("fill"); }
	public static function fillDrip(): self { return new KornIcon("fill-drip"); }
	public static function film(): self { return new KornIcon("film"); }
	public static function filter(): self { return new KornIcon("filter"); }
	public static function filterCircleDollar(): self { return new KornIcon("filter-circle-dollar"); }
	public static function filterCircleXmark(): self { return new KornIcon("filter-circle-xmark"); }
	public static function fingerprint(): self { return new KornIcon("fingerprint"); }
	public static function fire(): self { return new KornIcon("fire"); }
	public static function fireBurner(): self { return new KornIcon("fire-burner"); }
	public static function fireExtinguisher(): self { return new KornIcon("fire-extinguisher"); }
	//endregion
	//region PAGE 4
	public static function fireFlameCurved(): self { return new KornIcon("fire-flame-curved"); }
	public static function fireFlameSimple(): self { return new KornIcon("fire-flame-simple"); }
	public static function fish(): self { return new KornIcon("fish"); }
	public static function fishFins(): self { return new KornIcon("fish-fins"); }
	public static function flag(): self { return new KornIcon("flag"); }
	public static function flagCheckered(): self { return new KornIcon("flag-checkered"); }
	public static function flagUsa(): self { return new KornIcon("flag-usa"); }
	public static function flask(): self { return new KornIcon("flask"); }
	public static function flaskVial(): self { return new KornIcon("flask-vial"); }
	public static function floppyDisk(): self { return new KornIcon("floppy-disk"); }
	public static function florinSign(): self { return new KornIcon("florin-sign"); }
	public static function folder(): self { return new KornIcon("folder"); }
	public static function folderClosed(): self { return new KornIcon("folder-closed"); }
	public static function folderMinus(): self { return new KornIcon("folder-minus"); }
	public static function folderOpen(): self { return new KornIcon("folder-open"); }
	public static function folderPlus(): self { return new KornIcon("folder-plus"); }
	public static function folderTree(): self { return new KornIcon("folder-tree"); }
	public static function font(): self { return new KornIcon("font"); }
	public static function fontAwesome(): self { return new KornIcon("font-awesome"); }
	public static function football(): self { return new KornIcon("football"); }
	public static function forward(): self { return new KornIcon("forward"); }
	public static function forwardFast(): self { return new KornIcon("forward-fast"); }
	public static function forwardStep(): self { return new KornIcon("forward-step"); }
	public static function francSign(): self { return new KornIcon("franc-sign"); }
	public static function frog(): self { return new KornIcon("frog"); }
	public static function futbol(): self { return new KornIcon("futbol"); }
	public static function g(): self { return new KornIcon("g"); }
	public static function gamepad(): self { return new KornIcon("gamepad"); }
	public static function gasPump(): self { return new KornIcon("gas-pump"); }
	public static function gauge(): self { return new KornIcon("gauge"); }
	public static function gaugeHigh(): self { return new KornIcon("gauge-high"); }
	public static function gaugeSimple(): self { return new KornIcon("gauge-simple"); }
	public static function gaugeSimpleHigh(): self { return new KornIcon("gauge-simple-high"); }
	public static function gavel(): self { return new KornIcon("gavel"); }
	public static function gear(): self { return new KornIcon("gear"); }
	public static function gears(): self { return new KornIcon("gears"); }
	public static function gem(): self { return new KornIcon("gem"); }
	public static function genderless(): self { return new KornIcon("genderless"); }
	public static function ghost(): self { return new KornIcon("ghost"); }
	public static function gift(): self { return new KornIcon("gift"); }
	public static function gifts(): self { return new KornIcon("gifts"); }
	public static function glassWater(): self { return new KornIcon("glass-water"); }
	public static function glassWaterDroplet(): self { return new KornIcon("glass-water-droplet"); }
	public static function glasses(): self { return new KornIcon("glasses"); }
	public static function globe(): self { return new KornIcon("globe"); }
	public static function golfBallTee(): self { return new KornIcon("golf-ball-tee"); }
	public static function gopuram(): self { return new KornIcon("gopuram"); }
	public static function graduationCap(): self { return new KornIcon("graduation-cap"); }
	public static function greaterThan(): self { return new KornIcon("greater-than"); }
	public static function greaterThanEqual(): self { return new KornIcon("greater-than-equal"); }
	public static function grip(): self { return new KornIcon("grip"); }
	public static function gripLines(): self { return new KornIcon("grip-lines"); }
	public static function gripLinesVertical(): self { return new KornIcon("grip-lines-vertical"); }
	public static function gripVertical(): self { return new KornIcon("grip-vertical"); }
	public static function groupArrowsRotate(): self { return new KornIcon("group-arrows-rotate"); }
	public static function guaraniSign(): self { return new KornIcon("guarani-sign"); }
	public static function guitar(): self { return new KornIcon("guitar"); }
	public static function gun(): self { return new KornIcon("gun"); }
	public static function h(): self { return new KornIcon("h"); }
	public static function hammer(): self { return new KornIcon("hammer"); }
	public static function hamsa(): self { return new KornIcon("hamsa"); }
	public static function hand(): self { return new KornIcon("hand"); }
	public static function handBackFist(): self { return new KornIcon("hand-back-fist"); }
	public static function handDots(): self { return new KornIcon("hand-dots"); }
	public static function handFist(): self { return new KornIcon("hand-fist"); }
	public static function handHolding(): self { return new KornIcon("hand-holding"); }
	public static function handHoldingDollar(): self { return new KornIcon("hand-holding-dollar"); }
	public static function handHoldingDroplet(): self { return new KornIcon("hand-holding-droplet"); }
	public static function handHoldingHand(): self { return new KornIcon("hand-holding-hand"); }
	public static function handHoldingHeart(): self { return new KornIcon("hand-holding-heart"); }
	public static function handHoldingMedical(): self { return new KornIcon("hand-holding-medical"); }
	public static function handLizard(): self { return new KornIcon("hand-lizard"); }
	public static function handMiddleFinger(): self { return new KornIcon("hand-middle-finger"); }
	public static function handPeace(): self { return new KornIcon("hand-peace"); }
	public static function handPointDown(): self { return new KornIcon("hand-point-down"); }
	public static function handPointLeft(): self { return new KornIcon("hand-point-left"); }
	public static function handPointRight(): self { return new KornIcon("hand-point-right"); }
	public static function handPointUp(): self { return new KornIcon("hand-point-up"); }
	public static function handPointer(): self { return new KornIcon("hand-pointer"); }
	public static function handScissors(): self { return new KornIcon("hand-scissors"); }
	public static function handSparkles(): self { return new KornIcon("hand-sparkles"); }
	public static function handSpock(): self { return new KornIcon("hand-spock"); }
	public static function handcuffs(): self { return new KornIcon("handcuffs"); }
	public static function hands(): self { return new KornIcon("hands"); }
	public static function handsAslInterpreting(): self { return new KornIcon("hands-asl-interpreting"); }
	public static function handsBound(): self { return new KornIcon("hands-bound"); }
	public static function handsBubbles(): self { return new KornIcon("hands-bubbles"); }
	public static function handsClapping(): self { return new KornIcon("hands-clapping"); }
	public static function handsHolding(): self { return new KornIcon("hands-holding"); }
	public static function handsHoldingChild(): self { return new KornIcon("hands-holding-child"); }
	public static function handsHoldingCircle(): self { return new KornIcon("hands-holding-circle"); }
	public static function handsPraying(): self { return new KornIcon("hands-praying"); }
	public static function handshake(): self { return new KornIcon("handshake"); }
	public static function handshakeAngle(): self { return new KornIcon("handshake-angle"); }
	public static function handshakeSimple(): self { return new KornIcon("handshake-simple"); }
	public static function handshakeSimpleSlash(): self { return new KornIcon("handshake-simple-slash"); }
	public static function handshakeSlash(): self { return new KornIcon("handshake-slash"); }
	public static function hanukiah(): self { return new KornIcon("hanukiah"); }
	public static function hardDrive(): self { return new KornIcon("hard-drive"); }
	public static function hashtag(): self { return new KornIcon("hashtag"); }
	public static function hatCowboy(): self { return new KornIcon("hat-cowboy"); }
	public static function hatCowboySide(): self { return new KornIcon("hat-cowboy-side"); }
	public static function hatWizard(): self { return new KornIcon("hat-wizard"); }
	public static function headSideCough(): self { return new KornIcon("head-side-cough"); }
	public static function headSideCoughSlash(): self { return new KornIcon("head-side-cough-slash"); }
	public static function headSideMask(): self { return new KornIcon("head-side-mask"); }
	public static function headSideVirus(): self { return new KornIcon("head-side-virus"); }
	public static function heading(): self { return new KornIcon("heading"); }
	public static function headphones(): self { return new KornIcon("headphones"); }
	public static function headphonesSimple(): self { return new KornIcon("headphones-simple"); }
	public static function headset(): self { return new KornIcon("headset"); }
	public static function heart(): self { return new KornIcon("heart"); }
	public static function heartCircleBolt(): self { return new KornIcon("heart-circle-bolt"); }
	public static function heartCircleCheck(): self { return new KornIcon("heart-circle-check"); }
	public static function heartCircleExclamation(): self { return new KornIcon("heart-circle-exclamation"); }
	public static function heartCircleMinus(): self { return new KornIcon("heart-circle-minus"); }
	public static function heartCirclePlus(): self { return new KornIcon("heart-circle-plus"); }
	public static function heartCircleXmark(): self { return new KornIcon("heart-circle-xmark"); }
	public static function heartCrack(): self { return new KornIcon("heart-crack"); }
	public static function heartPulse(): self { return new KornIcon("heart-pulse"); }
	public static function helicopter(): self { return new KornIcon("helicopter"); }
	public static function helicopterSymbol(): self { return new KornIcon("helicopter-symbol"); }
	public static function helmetSafety(): self { return new KornIcon("helmet-safety"); }
	public static function helmetUn(): self { return new KornIcon("helmet-un"); }
	public static function highlighter(): self { return new KornIcon("highlighter"); }
	public static function hillAvalanche(): self { return new KornIcon("hill-avalanche"); }
	public static function hillRockslide(): self { return new KornIcon("hill-rockslide"); }
	public static function hippo(): self { return new KornIcon("hippo"); }
	public static function hockeyPuck(): self { return new KornIcon("hockey-puck"); }
	public static function hollyBerry(): self { return new KornIcon("holly-berry"); }
	public static function horse(): self { return new KornIcon("horse"); }
	public static function horseHead(): self { return new KornIcon("horse-head"); }
	public static function hospital(): self { return new KornIcon("hospital"); }
	public static function hospitalUser(): self { return new KornIcon("hospital-user"); }
	public static function hotTubPerson(): self { return new KornIcon("hot-tub-person"); }
	public static function hotdog(): self { return new KornIcon("hotdog"); }
	public static function hotel(): self { return new KornIcon("hotel"); }
	public static function hourglass(): self { return new KornIcon("hourglass"); }
	public static function hourglassEnd(): self { return new KornIcon("hourglass-end"); }
	public static function hourglassHalf(): self { return new KornIcon("hourglass-half"); }
	public static function hourglassStart(): self { return new KornIcon("hourglass-start"); }
	public static function house(): self { return new KornIcon("house"); }
	public static function houseChimney(): self { return new KornIcon("house-chimney"); }
	public static function houseChimneyCrack(): self { return new KornIcon("house-chimney-crack"); }
	public static function houseChimneyMedical(): self { return new KornIcon("house-chimney-medical"); }
	public static function houseChimneyUser(): self { return new KornIcon("house-chimney-user"); }
	public static function houseChimneyWindow(): self { return new KornIcon("house-chimney-window"); }
	public static function houseCircleCheck(): self { return new KornIcon("house-circle-check"); }
	public static function houseCircleExclamation(): self { return new KornIcon("house-circle-exclamation"); }
	public static function houseCircleXmark(): self { return new KornIcon("house-circle-xmark"); }
	public static function houseCrack(): self { return new KornIcon("house-crack"); }
	public static function houseFire(): self { return new KornIcon("house-fire"); }
	public static function houseFlag(): self { return new KornIcon("house-flag"); }
	public static function houseFloodWater(): self { return new KornIcon("house-flood-water"); }
	public static function houseFloodWaterCircleArrowRight(): self { return new KornIcon("house-flood-water-circle-arrow-right"); }
	public static function houseLaptop(): self { return new KornIcon("house-laptop"); }
	public static function houseLock(): self { return new KornIcon("house-lock"); }
	public static function houseMedical(): self { return new KornIcon("house-medical"); }
	public static function houseMedicalCircleCheck(): self { return new KornIcon("house-medical-circle-check"); }
	public static function houseMedicalCircleExclamation(): self { return new KornIcon("house-medical-circle-exclamation"); }
	public static function houseMedicalCircleXmark(): self { return new KornIcon("house-medical-circle-xmark"); }
	public static function houseMedicalFlag(): self { return new KornIcon("house-medical-flag"); }
	public static function houseSignal(): self { return new KornIcon("house-signal"); }
	public static function houseTsunami(): self { return new KornIcon("house-tsunami"); }
	public static function houseUser(): self { return new KornIcon("house-user"); }
	public static function hryvniaSign(): self { return new KornIcon("hryvnia-sign"); }
	public static function hurricane(): self { return new KornIcon("hurricane"); }
	public static function i(): self { return new KornIcon("i"); }
	public static function iCursor(): self { return new KornIcon("i-cursor"); }
	public static function iceCream(): self { return new KornIcon("ice-cream"); }
	public static function icicles(): self { return new KornIcon("icicles"); }
	public static function icons(): self { return new KornIcon("icons"); }
	public static function idBadge(): self { return new KornIcon("id-badge"); }
	public static function idCard(): self { return new KornIcon("id-card"); }
	public static function idCardClip(): self { return new KornIcon("id-card-clip"); }
	public static function igloo(): self { return new KornIcon("igloo"); }
	public static function image(): self { return new KornIcon("image"); }
	public static function imagePortrait(): self { return new KornIcon("image-portrait"); }
	public static function images(): self { return new KornIcon("images"); }
	public static function inbox(): self { return new KornIcon("inbox"); }
	//endregion
	//region PAGE 5
	public static function indent(): self { return new KornIcon("indent"); }
	public static function indianRupeeSign(): self { return new KornIcon("indian-rupee-sign"); }
	public static function industry(): self { return new KornIcon("industry"); }
	public static function infinity(): self { return new KornIcon("infinity"); }
	public static function info(): self { return new KornIcon("info"); }
	public static function italic(): self { return new KornIcon("italic"); }
	public static function j(): self { return new KornIcon("j"); }
	public static function jar(): self { return new KornIcon("jar"); }
	public static function jarWheat(): self { return new KornIcon("jar-wheat"); }
	public static function jedi(): self { return new KornIcon("jedi"); }
	public static function jetFighter(): self { return new KornIcon("jet-fighter"); }
	public static function jetFighterUp(): self { return new KornIcon("jet-fighter-up"); }
	public static function joint(): self { return new KornIcon("joint"); }
	public static function jugDetergent(): self { return new KornIcon("jug-detergent"); }
	public static function k(): self { return new KornIcon("k"); }
	public static function kaaba(): self { return new KornIcon("kaaba"); }
	public static function key(): self { return new KornIcon("key"); }
	public static function keyboard(): self { return new KornIcon("keyboard"); }
	public static function khanda(): self { return new KornIcon("khanda"); }
	public static function kipSign(): self { return new KornIcon("kip-sign"); }
	public static function kitMedical(): self { return new KornIcon("kit-medical"); }
	public static function kitchenSet(): self { return new KornIcon("kitchen-set"); }
	public static function kiwiBird(): self { return new KornIcon("kiwi-bird"); }
	public static function l(): self { return new KornIcon("l"); }
	public static function landMineOn(): self { return new KornIcon("land-mine-on"); }
	public static function landmark(): self { return new KornIcon("landmark"); }
	public static function landmarkDome(): self { return new KornIcon("landmark-dome"); }
	public static function landmarkFlag(): self { return new KornIcon("landmark-flag"); }
	public static function language(): self { return new KornIcon("language"); }
	public static function laptop(): self { return new KornIcon("laptop"); }
	public static function laptopCode(): self { return new KornIcon("laptop-code"); }
	public static function laptopFile(): self { return new KornIcon("laptop-file"); }
	public static function laptopMedical(): self { return new KornIcon("laptop-medical"); }
	public static function lariSign(): self { return new KornIcon("lari-sign"); }
	public static function layerGroup(): self { return new KornIcon("layer-group"); }
	public static function leaf(): self { return new KornIcon("leaf"); }
	public static function leftLong(): self { return new KornIcon("left-long"); }
	public static function leftRight(): self { return new KornIcon("left-right"); }
	public static function lemon(): self { return new KornIcon("lemon"); }
	public static function lessThan(): self { return new KornIcon("less-than"); }
	public static function lessThanEqual(): self { return new KornIcon("less-than-equal"); }
	public static function lifeRing(): self { return new KornIcon("life-ring"); }
	public static function lightbulb(): self { return new KornIcon("lightbulb"); }
	public static function linesLeaning(): self { return new KornIcon("lines-leaning"); }
	public static function link(): self { return new KornIcon("link"); }
	public static function linkSlash(): self { return new KornIcon("link-slash"); }
	public static function liraSign(): self { return new KornIcon("lira-sign"); }
	public static function list(): self { return new KornIcon("list"); }
	public static function listCheck(): self { return new KornIcon("list-check"); }
	public static function listOl(): self { return new KornIcon("list-ol"); }
	public static function listUl(): self { return new KornIcon("list-ul"); }
	public static function litecoinSign(): self { return new KornIcon("litecoin-sign"); }
	public static function locationArrow(): self { return new KornIcon("location-arrow"); }
	public static function locationCrosshairs(): self { return new KornIcon("location-crosshairs"); }
	public static function locationDot(): self { return new KornIcon("location-dot"); }
	public static function locationPin(): self { return new KornIcon("location-pin"); }
	public static function locationPinLock(): self { return new KornIcon("location-pin-lock"); }
	public static function lock(): self { return new KornIcon("lock"); }
	public static function lockOpen(): self { return new KornIcon("lock-open"); }
	public static function locust(): self { return new KornIcon("locust"); }
	public static function lungs(): self { return new KornIcon("lungs"); }
	public static function lungsVirus(): self { return new KornIcon("lungs-virus"); }
	public static function m(): self { return new KornIcon("m"); }
	public static function magnet(): self { return new KornIcon("magnet"); }
	public static function magnifyingGlass(): self { return new KornIcon("magnifying-glass"); }
	public static function magnifyingGlassArrowRight(): self { return new KornIcon("magnifying-glass-arrow-right"); }
	public static function magnifyingGlassChart(): self { return new KornIcon("magnifying-glass-chart"); }
	public static function magnifyingGlassDollar(): self { return new KornIcon("magnifying-glass-dollar"); }
	public static function magnifyingGlassLocation(): self { return new KornIcon("magnifying-glass-location"); }
	public static function magnifyingGlassMinus(): self { return new KornIcon("magnifying-glass-minus"); }
	public static function magnifyingGlassPlus(): self { return new KornIcon("magnifying-glass-plus"); }
	public static function manatSign(): self { return new KornIcon("manat-sign"); }
	public static function map(): self { return new KornIcon("map"); }
	public static function mapLocation(): self { return new KornIcon("map-location"); }
	public static function mapLocationDot(): self { return new KornIcon("map-location-dot"); }
	public static function mapPin(): self { return new KornIcon("map-pin"); }
	public static function marker(): self { return new KornIcon("marker"); }
	public static function mars(): self { return new KornIcon("mars"); }
	public static function marsAndVenus(): self { return new KornIcon("mars-and-venus"); }
	public static function marsAndVenusBurst(): self { return new KornIcon("mars-and-venus-burst"); }
	public static function marsDouble(): self { return new KornIcon("mars-double"); }
	public static function marsStroke(): self { return new KornIcon("mars-stroke"); }
	public static function marsStrokeRight(): self { return new KornIcon("mars-stroke-right"); }
	public static function marsStrokeUp(): self { return new KornIcon("mars-stroke-up"); }
	public static function martiniGlass(): self { return new KornIcon("martini-glass"); }
	public static function martiniGlassCitrus(): self { return new KornIcon("martini-glass-citrus"); }
	public static function martiniGlassEmpty(): self { return new KornIcon("martini-glass-empty"); }
	public static function mask(): self { return new KornIcon("mask"); }
	public static function maskFace(): self { return new KornIcon("mask-face"); }
	public static function maskVentilator(): self { return new KornIcon("mask-ventilator"); }
	public static function masksTheater(): self { return new KornIcon("masks-theater"); }
	public static function mattressPillow(): self { return new KornIcon("mattress-pillow"); }
	public static function maximize(): self { return new KornIcon("maximize"); }
	public static function medal(): self { return new KornIcon("medal"); }
	public static function memory(): self { return new KornIcon("memory"); }
	public static function menorah(): self { return new KornIcon("menorah"); }
	public static function mercury(): self { return new KornIcon("mercury"); }
	public static function message(): self { return new KornIcon("message"); }
	public static function meteor(): self { return new KornIcon("meteor"); }
	public static function microchip(): self { return new KornIcon("microchip"); }
	public static function microphone(): self { return new KornIcon("microphone"); }
	public static function microphoneLines(): self { return new KornIcon("microphone-lines"); }
	public static function microphoneLinesSlash(): self { return new KornIcon("microphone-lines-slash"); }
	public static function microphoneSlash(): self { return new KornIcon("microphone-slash"); }
	public static function microscope(): self { return new KornIcon("microscope"); }
	public static function millSign(): self { return new KornIcon("mill-sign"); }
	public static function minimize(): self { return new KornIcon("minimize"); }
	public static function minus(): self { return new KornIcon("minus"); }
	public static function mitten(): self { return new KornIcon("mitten"); }
	public static function mobile(): self { return new KornIcon("mobile"); }
	public static function mobileButton(): self { return new KornIcon("mobile-button"); }
	public static function mobileRetro(): self { return new KornIcon("mobile-retro"); }
	public static function mobileScreen(): self { return new KornIcon("mobile-screen"); }
	public static function mobileScreenButton(): self { return new KornIcon("mobile-screen-button"); }
	public static function moneyBill(): self { return new KornIcon("money-bill"); }
	public static function moneyBill1(): self { return new KornIcon("money-bill-1"); }
	public static function moneyBill1Wave(): self { return new KornIcon("money-bill-1-wave"); }
	public static function moneyBillTransfer(): self { return new KornIcon("money-bill-transfer"); }
	public static function moneyBillTrendUp(): self { return new KornIcon("money-bill-trend-up"); }
	public static function moneyBillWave(): self { return new KornIcon("money-bill-wave"); }
	public static function moneyBillWheat(): self { return new KornIcon("money-bill-wheat"); }
	public static function moneyBills(): self { return new KornIcon("money-bills"); }
	public static function moneyCheck(): self { return new KornIcon("money-check"); }
	public static function moneyCheckDollar(): self { return new KornIcon("money-check-dollar"); }
	public static function monument(): self { return new KornIcon("monument"); }
	public static function moon(): self { return new KornIcon("moon"); }
	public static function mortarPestle(): self { return new KornIcon("mortar-pestle"); }
	public static function mosque(): self { return new KornIcon("mosque"); }
	public static function mosquito(): self { return new KornIcon("mosquito"); }
	public static function mosquitoNet(): self { return new KornIcon("mosquito-net"); }
	public static function motorcycle(): self { return new KornIcon("motorcycle"); }
	public static function mound(): self { return new KornIcon("mound"); }
	public static function mountain(): self { return new KornIcon("mountain"); }
	public static function mountainCity(): self { return new KornIcon("mountain-city"); }
	public static function mountainSun(): self { return new KornIcon("mountain-sun"); }
	public static function mugHot(): self { return new KornIcon("mug-hot"); }
	public static function mugSaucer(): self { return new KornIcon("mug-saucer"); }
	public static function music(): self { return new KornIcon("music"); }
	public static function n(): self { return new KornIcon("n"); }
	public static function nairaSign(): self { return new KornIcon("naira-sign"); }
	public static function networkWired(): self { return new KornIcon("network-wired"); }
	public static function neuter(): self { return new KornIcon("neuter"); }
	public static function newspaper(): self { return new KornIcon("newspaper"); }
	public static function notEqual(): self { return new KornIcon("not-equal"); }
	public static function notdef(): self { return new KornIcon("notdef"); }
	public static function noteSticky(): self { return new KornIcon("note-sticky"); }
	public static function notesMedical(): self { return new KornIcon("notes-medical"); }
	public static function o(): self { return new KornIcon("o"); }
	public static function objectGroup(): self { return new KornIcon("object-group"); }
	public static function objectUngroup(): self { return new KornIcon("object-ungroup"); }
	public static function oilCan(): self { return new KornIcon("oil-can"); }
	public static function oilWell(): self { return new KornIcon("oil-well"); }
	public static function om(): self { return new KornIcon("om"); }
	public static function otter(): self { return new KornIcon("otter"); }
	public static function outdent(): self { return new KornIcon("outdent"); }
	public static function p(): self { return new KornIcon("p"); }
	public static function pager(): self { return new KornIcon("pager"); }
	public static function paintRoller(): self { return new KornIcon("paint-roller"); }
	public static function paintbrush(): self { return new KornIcon("paintbrush"); }
	public static function palette(): self { return new KornIcon("palette"); }
	public static function pallet(): self { return new KornIcon("pallet"); }
	public static function panorama(): self { return new KornIcon("panorama"); }
	public static function paperPlane(): self { return new KornIcon("paper-plane"); }
	public static function paperclip(): self { return new KornIcon("paperclip"); }
	public static function parachuteBox(): self { return new KornIcon("parachute-box"); }
	public static function paragraph(): self { return new KornIcon("paragraph"); }
	public static function passport(): self { return new KornIcon("passport"); }
	public static function paste(): self { return new KornIcon("paste"); }
	public static function pause(): self { return new KornIcon("pause"); }
	public static function paw(): self { return new KornIcon("paw"); }
	public static function peace(): self { return new KornIcon("peace"); }
	public static function pen(): self { return new KornIcon("pen"); }
	public static function penClip(): self { return new KornIcon("pen-clip"); }
	public static function penFancy(): self { return new KornIcon("pen-fancy"); }
	public static function penNib(): self { return new KornIcon("pen-nib"); }
	public static function penRuler(): self { return new KornIcon("pen-ruler"); }
	public static function penToSquare(): self { return new KornIcon("pen-to-square"); }
	public static function pencil(): self { return new KornIcon("pencil"); }
	public static function peopleArrows(): self { return new KornIcon("people-arrows"); }
	public static function peopleCarryBox(): self { return new KornIcon("people-carry-box"); }
	//endregion
	//region PAGE 6
	public static function peopleGroup(): self { return new KornIcon("people-group"); }
	public static function peopleLine(): self { return new KornIcon("people-line"); }
	public static function peoplePulling(): self { return new KornIcon("people-pulling"); }
	public static function peopleRobbery(): self { return new KornIcon("people-robbery"); }
	public static function peopleRoof(): self { return new KornIcon("people-roof"); }
	public static function pepperHot(): self { return new KornIcon("pepper-hot"); }
	public static function percent(): self { return new KornIcon("percent"); }
	public static function person(): self { return new KornIcon("person"); }
	public static function personArrowDownToLine(): self { return new KornIcon("person-arrow-down-to-line"); }
	public static function personArrowUpFromLine(): self { return new KornIcon("person-arrow-up-from-line"); }
	public static function personBiking(): self { return new KornIcon("person-biking"); }
	public static function personBooth(): self { return new KornIcon("person-booth"); }
	public static function personBreastfeeding(): self { return new KornIcon("person-breastfeeding"); }
	public static function personBurst(): self { return new KornIcon("person-burst"); }
	public static function personCane(): self { return new KornIcon("person-cane"); }
	public static function personChalkboard(): self { return new KornIcon("person-chalkboard"); }
	public static function personCircleCheck(): self { return new KornIcon("person-circle-check"); }
	public static function personCircleExclamation(): self { return new KornIcon("person-circle-exclamation"); }
	public static function personCircleMinus(): self { return new KornIcon("person-circle-minus"); }
	public static function personCirclePlus(): self { return new KornIcon("person-circle-plus"); }
	public static function personCircleQuestion(): self { return new KornIcon("person-circle-question"); }
	public static function personCircleXmark(): self { return new KornIcon("person-circle-xmark"); }
	public static function personDigging(): self { return new KornIcon("person-digging"); }
	public static function personDotsFromLine(): self { return new KornIcon("person-dots-from-line"); }
	public static function personDress(): self { return new KornIcon("person-dress"); }
	public static function personDressBurst(): self { return new KornIcon("person-dress-burst"); }
	public static function personDrowning(): self { return new KornIcon("person-drowning"); }
	public static function personFalling(): self { return new KornIcon("person-falling"); }
	public static function personFallingBurst(): self { return new KornIcon("person-falling-burst"); }
	public static function personHalfDress(): self { return new KornIcon("person-half-dress"); }
	public static function personHarassing(): self { return new KornIcon("person-harassing"); }
	public static function personHiking(): self { return new KornIcon("person-hiking"); }
	public static function personMilitaryPointing(): self { return new KornIcon("person-military-pointing"); }
	public static function personMilitaryRifle(): self { return new KornIcon("person-military-rifle"); }
	public static function personMilitaryToPerson(): self { return new KornIcon("person-military-to-person"); }
	public static function personPraying(): self { return new KornIcon("person-praying"); }
	public static function personPregnant(): self { return new KornIcon("person-pregnant"); }
	public static function personRays(): self { return new KornIcon("person-rays"); }
	public static function personRifle(): self { return new KornIcon("person-rifle"); }
	public static function personRunning(): self { return new KornIcon("person-running"); }
	public static function personShelter(): self { return new KornIcon("person-shelter"); }
	public static function personSkating(): self { return new KornIcon("person-skating"); }
	public static function personSkiing(): self { return new KornIcon("person-skiing"); }
	public static function personSkiingNordic(): self { return new KornIcon("person-skiing-nordic"); }
	public static function personSnowboarding(): self { return new KornIcon("person-snowboarding"); }
	public static function personSwimming(): self { return new KornIcon("person-swimming"); }
	public static function personThroughWindow(): self { return new KornIcon("person-through-window"); }
	public static function personWalking(): self { return new KornIcon("person-walking"); }
	public static function personWalkingArrowLoopLeft(): self { return new KornIcon("person-walking-arrow-loop-left"); }
	public static function personWalkingArrowRight(): self { return new KornIcon("person-walking-arrow-right"); }
	public static function personWalkingDashedLineArrowRight(): self { return new KornIcon("person-walking-dashed-line-arrow-right"); }
	public static function personWalkingLuggage(): self { return new KornIcon("person-walking-luggage"); }
	public static function personWalkingWithCane(): self { return new KornIcon("person-walking-with-cane"); }
	public static function pesetaSign(): self { return new KornIcon("peseta-sign"); }
	public static function pesoSign(): self { return new KornIcon("peso-sign"); }
	public static function phone(): self { return new KornIcon("phone"); }
	public static function phoneFlip(): self { return new KornIcon("phone-flip"); }
	public static function phoneSlash(): self { return new KornIcon("phone-slash"); }
	public static function phoneVolume(): self { return new KornIcon("phone-volume"); }
	public static function photoFilm(): self { return new KornIcon("photo-film"); }
	public static function piggyBank(): self { return new KornIcon("piggy-bank"); }
	public static function pills(): self { return new KornIcon("pills"); }
	public static function pizzaSlice(): self { return new KornIcon("pizza-slice"); }
	public static function placeOfWorship(): self { return new KornIcon("place-of-worship"); }
	public static function plane(): self { return new KornIcon("plane"); }
	public static function planeArrival(): self { return new KornIcon("plane-arrival"); }
	public static function planeCircleCheck(): self { return new KornIcon("plane-circle-check"); }
	public static function planeCircleExclamation(): self { return new KornIcon("plane-circle-exclamation"); }
	public static function planeCircleXmark(): self { return new KornIcon("plane-circle-xmark"); }
	public static function planeDeparture(): self { return new KornIcon("plane-departure"); }
	public static function planeLock(): self { return new KornIcon("plane-lock"); }
	public static function planeSlash(): self { return new KornIcon("plane-slash"); }
	public static function planeUp(): self { return new KornIcon("plane-up"); }
	public static function plantWilt(): self { return new KornIcon("plant-wilt"); }
	public static function plateWheat(): self { return new KornIcon("plate-wheat"); }
	public static function play(): self { return new KornIcon("play"); }
	public static function plug(): self { return new KornIcon("plug"); }
	public static function plugCircleBolt(): self { return new KornIcon("plug-circle-bolt"); }
	public static function plugCircleCheck(): self { return new KornIcon("plug-circle-check"); }
	public static function plugCircleExclamation(): self { return new KornIcon("plug-circle-exclamation"); }
	public static function plugCircleMinus(): self { return new KornIcon("plug-circle-minus"); }
	public static function plugCirclePlus(): self { return new KornIcon("plug-circle-plus"); }
	public static function plugCircleXmark(): self { return new KornIcon("plug-circle-xmark"); }
	public static function plus(): self { return new KornIcon("plus"); }
	public static function plusMinus(): self { return new KornIcon("plus-minus"); }
	public static function podcast(): self { return new KornIcon("podcast"); }
	public static function poo(): self { return new KornIcon("poo"); }
	public static function pooStorm(): self { return new KornIcon("poo-storm"); }
	public static function poop(): self { return new KornIcon("poop"); }
	public static function powerOff(): self { return new KornIcon("power-off"); }
	public static function prescription(): self { return new KornIcon("prescription"); }
	public static function prescriptionBottle(): self { return new KornIcon("prescription-bottle"); }
	public static function prescriptionBottleMedical(): self { return new KornIcon("prescription-bottle-medical"); }
	public static function print(): self { return new KornIcon("print"); }
	public static function pumpMedical(): self { return new KornIcon("pump-medical"); }
	public static function pumpSoap(): self { return new KornIcon("pump-soap"); }
	public static function puzzlePiece(): self { return new KornIcon("puzzle-piece"); }
	public static function q(): self { return new KornIcon("q"); }
	public static function qrcode(): self { return new KornIcon("qrcode"); }
	public static function question(): self { return new KornIcon("question"); }
	public static function quoteLeft(): self { return new KornIcon("quote-left"); }
	public static function quoteRight(): self { return new KornIcon("quote-right"); }
	public static function r(): self { return new KornIcon("r"); }
	public static function radiation(): self { return new KornIcon("radiation"); }
	public static function radio(): self { return new KornIcon("radio"); }
	public static function rainbow(): self { return new KornIcon("rainbow"); }
	public static function rankingStar(): self { return new KornIcon("ranking-star"); }
	public static function receipt(): self { return new KornIcon("receipt"); }
	public static function recordVinyl(): self { return new KornIcon("record-vinyl"); }
	public static function rectangleAd(): self { return new KornIcon("rectangle-ad"); }
	public static function rectangleList(): self { return new KornIcon("rectangle-list"); }
	public static function rectangleXmark(): self { return new KornIcon("rectangle-xmark"); }
	public static function recycle(): self { return new KornIcon("recycle"); }
	public static function registered(): self { return new KornIcon("registered"); }
	public static function repeat(): self { return new KornIcon("repeat"); }
	public static function reply(): self { return new KornIcon("reply"); }
	public static function replyAll(): self { return new KornIcon("reply-all"); }
	public static function republican(): self { return new KornIcon("republican"); }
	public static function restroom(): self { return new KornIcon("restroom"); }
	public static function retweet(): self { return new KornIcon("retweet"); }
	public static function ribbon(): self { return new KornIcon("ribbon"); }
	public static function rightFromBracket(): self { return new KornIcon("right-from-bracket"); }
	public static function rightLeft(): self { return new KornIcon("right-left"); }
	public static function rightLong(): self { return new KornIcon("right-long"); }
	public static function rightToBracket(): self { return new KornIcon("right-to-bracket"); }
	public static function ring(): self { return new KornIcon("ring"); }
	public static function road(): self { return new KornIcon("road"); }
	public static function roadBarrier(): self { return new KornIcon("road-barrier"); }
	public static function roadBridge(): self { return new KornIcon("road-bridge"); }
	public static function roadCircleCheck(): self { return new KornIcon("road-circle-check"); }
	public static function roadCircleExclamation(): self { return new KornIcon("road-circle-exclamation"); }
	public static function roadCircleXmark(): self { return new KornIcon("road-circle-xmark"); }
	public static function roadLock(): self { return new KornIcon("road-lock"); }
	public static function roadSpikes(): self { return new KornIcon("road-spikes"); }
	public static function robot(): self { return new KornIcon("robot"); }
	public static function rocket(): self { return new KornIcon("rocket"); }
	public static function rotate(): self { return new KornIcon("rotate"); }
	public static function rotateLeft(): self { return new KornIcon("rotate-left"); }
	public static function rotateRight(): self { return new KornIcon("rotate-right"); }
	public static function route(): self { return new KornIcon("route"); }
	public static function rss(): self { return new KornIcon("rss"); }
	public static function rubleSign(): self { return new KornIcon("ruble-sign"); }
	public static function rug(): self { return new KornIcon("rug"); }
	public static function ruler(): self { return new KornIcon("ruler"); }
	public static function rulerCombined(): self { return new KornIcon("ruler-combined"); }
	public static function rulerHorizontal(): self { return new KornIcon("ruler-horizontal"); }
	public static function rulerVertical(): self { return new KornIcon("ruler-vertical"); }
	public static function rupeeSign(): self { return new KornIcon("rupee-sign"); }
	public static function rupiahSign(): self { return new KornIcon("rupiah-sign"); }
	public static function s(): self { return new KornIcon("s"); }
	public static function sackDollar(): self { return new KornIcon("sack-dollar"); }
	public static function sackXmark(): self { return new KornIcon("sack-xmark"); }
	public static function sailboat(): self { return new KornIcon("sailboat"); }
	public static function satellite(): self { return new KornIcon("satellite"); }
	public static function satelliteDish(): self { return new KornIcon("satellite-dish"); }
	public static function scaleBalanced(): self { return new KornIcon("scale-balanced"); }
	public static function scaleUnbalanced(): self { return new KornIcon("scale-unbalanced"); }
	public static function scaleUnbalancedFlip(): self { return new KornIcon("scale-unbalanced-flip"); }
	public static function school(): self { return new KornIcon("school"); }
	public static function schoolCircleCheck(): self { return new KornIcon("school-circle-check"); }
	public static function schoolCircleExclamation(): self { return new KornIcon("school-circle-exclamation"); }
	public static function schoolCircleXmark(): self { return new KornIcon("school-circle-xmark"); }
	public static function schoolFlag(): self { return new KornIcon("school-flag"); }
	public static function schoolLock(): self { return new KornIcon("school-lock"); }
	public static function scissors(): self { return new KornIcon("scissors"); }
	public static function screwdriver(): self { return new KornIcon("screwdriver"); }
	public static function screwdriverWrench(): self { return new KornIcon("screwdriver-wrench"); }
	public static function scroll(): self { return new KornIcon("scroll"); }
	public static function scrollTorah(): self { return new KornIcon("scroll-torah"); }
	public static function sdCard(): self { return new KornIcon("sd-card"); }
	public static function section(): self { return new KornIcon("section"); }
	public static function seedling(): self { return new KornIcon("seedling"); }
	public static function server(): self { return new KornIcon("server"); }
	public static function shapes(): self { return new KornIcon("shapes"); }
	public static function share(): self { return new KornIcon("share"); }
	public static function shareFromSquare(): self { return new KornIcon("share-from-square"); }
	public static function shareNodes(): self { return new KornIcon("share-nodes"); }
	public static function sheetPlastic(): self { return new KornIcon("sheet-plastic"); }
	public static function shekelSign(): self { return new KornIcon("shekel-sign"); }
	public static function shield(): self { return new KornIcon("shield"); }
	//endregion
	//region PAGE 7
	public static function shieldCat(): self { return new KornIcon("shield-cat"); }
	public static function shieldDog(): self { return new KornIcon("shield-dog"); }
	public static function shieldHalved(): self { return new KornIcon("shield-halved"); }
	public static function shieldHeart(): self { return new KornIcon("shield-heart"); }
	public static function shieldVirus(): self { return new KornIcon("shield-virus"); }
	public static function ship(): self { return new KornIcon("ship"); }
	public static function shirt(): self { return new KornIcon("shirt"); }
	public static function shoePrints(): self { return new KornIcon("shoe-prints"); }
	public static function shop(): self { return new KornIcon("shop"); }
	public static function shopLock(): self { return new KornIcon("shop-lock"); }
	public static function shopSlash(): self { return new KornIcon("shop-slash"); }
	public static function shower(): self { return new KornIcon("shower"); }
	public static function shrimp(): self { return new KornIcon("shrimp"); }
	public static function shuffle(): self { return new KornIcon("shuffle"); }
	public static function shuttleSpace(): self { return new KornIcon("shuttle-space"); }
	public static function signHanging(): self { return new KornIcon("sign-hanging"); }
	public static function signal(): self { return new KornIcon("signal"); }
	public static function signature(): self { return new KornIcon("signature"); }
	public static function signsPost(): self { return new KornIcon("signs-post"); }
	public static function simCard(): self { return new KornIcon("sim-card"); }
	public static function sink(): self { return new KornIcon("sink"); }
	public static function sitemap(): self { return new KornIcon("sitemap"); }
	public static function skull(): self { return new KornIcon("skull"); }
	public static function skullCrossbones(): self { return new KornIcon("skull-crossbones"); }
	public static function slash(): self { return new KornIcon("slash"); }
	public static function sleigh(): self { return new KornIcon("sleigh"); }
	public static function sliders(): self { return new KornIcon("sliders"); }
	public static function smog(): self { return new KornIcon("smog"); }
	public static function smoking(): self { return new KornIcon("smoking"); }
	public static function snowflake(): self { return new KornIcon("snowflake"); }
	public static function snowman(): self { return new KornIcon("snowman"); }
	public static function snowplow(): self { return new KornIcon("snowplow"); }
	public static function soap(): self { return new KornIcon("soap"); }
	public static function socks(): self { return new KornIcon("socks"); }
	public static function solarPanel(): self { return new KornIcon("solar-panel"); }
	public static function sort(): self { return new KornIcon("sort"); }
	public static function sortDown(): self { return new KornIcon("sort-down"); }
	public static function sortUp(): self { return new KornIcon("sort-up"); }
	public static function spa(): self { return new KornIcon("spa"); }
	public static function spaghettiMonsterFlying(): self { return new KornIcon("spaghetti-monster-flying"); }
	public static function spellCheck(): self { return new KornIcon("spell-check"); }
	public static function spider(): self { return new KornIcon("spider"); }
	public static function spinner(): self { return new KornIcon("spinner"); }
	public static function splotch(): self { return new KornIcon("splotch"); }
	public static function spoon(): self { return new KornIcon("spoon"); }
	public static function sprayCan(): self { return new KornIcon("spray-can"); }
	public static function sprayCanSparkles(): self { return new KornIcon("spray-can-sparkles"); }
	public static function square(): self { return new KornIcon("square"); }
	public static function squareArrowUpRight(): self { return new KornIcon("square-arrow-up-right"); }
	public static function squareCaretDown(): self { return new KornIcon("square-caret-down"); }
	public static function squareCaretLeft(): self { return new KornIcon("square-caret-left"); }
	public static function squareCaretRight(): self { return new KornIcon("square-caret-right"); }
	public static function squareCaretUp(): self { return new KornIcon("square-caret-up"); }
	public static function squareCheck(): self { return new KornIcon("square-check"); }
	public static function squareEnvelope(): self { return new KornIcon("square-envelope"); }
	public static function squareFull(): self { return new KornIcon("square-full"); }
	public static function squareH(): self { return new KornIcon("square-h"); }
	public static function squareMinus(): self { return new KornIcon("square-minus"); }
	public static function squareNfi(): self { return new KornIcon("square-nfi"); }
	public static function squareParking(): self { return new KornIcon("square-parking"); }
	public static function squarePen(): self { return new KornIcon("square-pen"); }
	public static function squarePersonConfined(): self { return new KornIcon("square-person-confined"); }
	public static function squarePhone(): self { return new KornIcon("square-phone"); }
	public static function squarePhoneFlip(): self { return new KornIcon("square-phone-flip"); }
	public static function squarePlus(): self { return new KornIcon("square-plus"); }
	public static function squarePollHorizontal(): self { return new KornIcon("square-poll-horizontal"); }
	public static function squarePollVertical(): self { return new KornIcon("square-poll-vertical"); }
	public static function squareRootVariable(): self { return new KornIcon("square-root-variable"); }
	public static function squareRss(): self { return new KornIcon("square-rss"); }
	public static function squareShareNodes(): self { return new KornIcon("square-share-nodes"); }
	public static function squareUpRight(): self { return new KornIcon("square-up-right"); }
	public static function squareVirus(): self { return new KornIcon("square-virus"); }
	public static function squareXmark(): self { return new KornIcon("square-xmark"); }
	public static function staffSnake(): self { return new KornIcon("staff-snake"); }
	public static function stairs(): self { return new KornIcon("stairs"); }
	public static function stamp(): self { return new KornIcon("stamp"); }
	public static function stapler(): self { return new KornIcon("stapler"); }
	public static function star(): self { return new KornIcon("star"); }
	public static function starAndCrescent(): self { return new KornIcon("star-and-crescent"); }
	public static function starHalf(): self { return new KornIcon("star-half"); }
	public static function starHalfStroke(): self { return new KornIcon("star-half-stroke"); }
	public static function starOfDavid(): self { return new KornIcon("star-of-david"); }
	public static function starOfLife(): self { return new KornIcon("star-of-life"); }
	public static function sterlingSign(): self { return new KornIcon("sterling-sign"); }
	public static function stethoscope(): self { return new KornIcon("stethoscope"); }
	public static function stop(): self { return new KornIcon("stop"); }
	public static function stopwatch(): self { return new KornIcon("stopwatch"); }
	public static function stopwatch20(): self { return new KornIcon("stopwatch-20"); }
	public static function store(): self { return new KornIcon("store"); }
	public static function storeSlash(): self { return new KornIcon("store-slash"); }
	public static function streetView(): self { return new KornIcon("street-view"); }
	public static function strikethrough(): self { return new KornIcon("strikethrough"); }
	public static function stroopwafel(): self { return new KornIcon("stroopwafel"); }
	public static function subscript(): self { return new KornIcon("subscript"); }
	public static function suitcase(): self { return new KornIcon("suitcase"); }
	public static function suitcaseMedical(): self { return new KornIcon("suitcase-medical"); }
	public static function suitcaseRolling(): self { return new KornIcon("suitcase-rolling"); }
	public static function sun(): self { return new KornIcon("sun"); }
	public static function sunPlantWilt(): self { return new KornIcon("sun-plant-wilt"); }
	public static function superscript(): self { return new KornIcon("superscript"); }
	public static function swatchbook(): self { return new KornIcon("swatchbook"); }
	public static function synagogue(): self { return new KornIcon("synagogue"); }
	public static function syringe(): self { return new KornIcon("syringe"); }
	public static function t(): self { return new KornIcon("t"); }
	public static function table(): self { return new KornIcon("table"); }
	public static function tableCells(): self { return new KornIcon("table-cells"); }
	public static function tableCellsLarge(): self { return new KornIcon("table-cells-large"); }
	public static function tableColumns(): self { return new KornIcon("table-columns"); }
	public static function tableList(): self { return new KornIcon("table-list"); }
	public static function tableTennisPaddleBall(): self { return new KornIcon("table-tennis-paddle-ball"); }
	public static function tablet(): self { return new KornIcon("tablet"); }
	public static function tabletButton(): self { return new KornIcon("tablet-button"); }
	public static function tabletScreenButton(): self { return new KornIcon("tablet-screen-button"); }
	public static function tablets(): self { return new KornIcon("tablets"); }
	public static function tachographDigital(): self { return new KornIcon("tachograph-digital"); }
	public static function tag(): self { return new KornIcon("tag"); }
	public static function tags(): self { return new KornIcon("tags"); }
	public static function tape(): self { return new KornIcon("tape"); }
	public static function tarp(): self { return new KornIcon("tarp"); }
	public static function tarpDroplet(): self { return new KornIcon("tarp-droplet"); }
	public static function taxi(): self { return new KornIcon("taxi"); }
	public static function teeth(): self { return new KornIcon("teeth"); }
	public static function teethOpen(): self { return new KornIcon("teeth-open"); }
	public static function temperatureArrowDown(): self { return new KornIcon("temperature-arrow-down"); }
	public static function temperatureArrowUp(): self { return new KornIcon("temperature-arrow-up"); }
	public static function temperatureEmpty(): self { return new KornIcon("temperature-empty"); }
	public static function temperatureFull(): self { return new KornIcon("temperature-full"); }
	public static function temperatureHalf(): self { return new KornIcon("temperature-half"); }
	public static function temperatureHigh(): self { return new KornIcon("temperature-high"); }
	public static function temperatureLow(): self { return new KornIcon("temperature-low"); }
	public static function temperatureQuarter(): self { return new KornIcon("temperature-quarter"); }
	public static function temperatureThreeQuarters(): self { return new KornIcon("temperature-three-quarters"); }
	public static function tengeSign(): self { return new KornIcon("tenge-sign"); }
	public static function tent(): self { return new KornIcon("tent"); }
	public static function tentArrowDownToLine(): self { return new KornIcon("tent-arrow-down-to-line"); }
	public static function tentArrowLeftRight(): self { return new KornIcon("tent-arrow-left-right"); }
	public static function tentArrowTurnLeft(): self { return new KornIcon("tent-arrow-turn-left"); }
	public static function tentArrowsDown(): self { return new KornIcon("tent-arrows-down"); }
	public static function tents(): self { return new KornIcon("tents"); }
	public static function terminal(): self { return new KornIcon("terminal"); }
	public static function textHeight(): self { return new KornIcon("text-height"); }
	public static function textSlash(): self { return new KornIcon("text-slash"); }
	public static function textWidth(): self { return new KornIcon("text-width"); }
	public static function thermometer(): self { return new KornIcon("thermometer"); }
	public static function thumbsDown(): self { return new KornIcon("thumbs-down"); }
	public static function thumbsUp(): self { return new KornIcon("thumbs-up"); }
	public static function thumbtack(): self { return new KornIcon("thumbtack"); }
	public static function ticket(): self { return new KornIcon("ticket"); }
	public static function ticketSimple(): self { return new KornIcon("ticket-simple"); }
	public static function timeline(): self { return new KornIcon("timeline"); }
	public static function toggleOff(): self { return new KornIcon("toggle-off"); }
	public static function toggleOn(): self { return new KornIcon("toggle-on"); }
	public static function toilet(): self { return new KornIcon("toilet"); }
	public static function toiletPaper(): self { return new KornIcon("toilet-paper"); }
	public static function toiletPaperSlash(): self { return new KornIcon("toilet-paper-slash"); }
	public static function toiletPortable(): self { return new KornIcon("toilet-portable"); }
	public static function toiletsPortable(): self { return new KornIcon("toilets-portable"); }
	public static function toolbox(): self { return new KornIcon("toolbox"); }
	public static function tooth(): self { return new KornIcon("tooth"); }
	public static function toriiGate(): self { return new KornIcon("torii-gate"); }
	public static function tornado(): self { return new KornIcon("tornado"); }
	public static function towerBroadcast(): self { return new KornIcon("tower-broadcast"); }
	public static function towerCell(): self { return new KornIcon("tower-cell"); }
	public static function towerObservation(): self { return new KornIcon("tower-observation"); }
	public static function tractor(): self { return new KornIcon("tractor"); }
	public static function trademark(): self { return new KornIcon("trademark"); }
	public static function trafficLight(): self { return new KornIcon("traffic-light"); }
	public static function trailer(): self { return new KornIcon("trailer"); }
	public static function train(): self { return new KornIcon("train"); }
	public static function trainSubway(): self { return new KornIcon("train-subway"); }
	public static function trainTram(): self { return new KornIcon("train-tram"); }
	public static function transgender(): self { return new KornIcon("transgender"); }
	public static function trash(): self { return new KornIcon("trash"); }
	public static function trashArrowUp(): self { return new KornIcon("trash-arrow-up"); }
	public static function trashCan(): self { return new KornIcon("trash-can"); }
	public static function trashCanArrowUp(): self { return new KornIcon("trash-can-arrow-up"); }
	public static function tree(): self { return new KornIcon("tree"); }
	public static function treeCity(): self { return new KornIcon("tree-city"); }
	public static function triangleExclamation(): self { return new KornIcon("triangle-exclamation"); }
	public static function trophy(): self { return new KornIcon("trophy"); }
	//endregion
	//region PAGE 8
	public static function trowel(): self { return new KornIcon("trowel"); }
	public static function trowelBricks(): self { return new KornIcon("trowel-bricks"); }
	public static function truck(): self { return new KornIcon("truck"); }
	public static function truckArrowRight(): self { return new KornIcon("truck-arrow-right"); }
	public static function truckDroplet(): self { return new KornIcon("truck-droplet"); }
	public static function truckFast(): self { return new KornIcon("truck-fast"); }
	public static function truckField(): self { return new KornIcon("truck-field"); }
	public static function truckFieldUn(): self { return new KornIcon("truck-field-un"); }
	public static function truckFront(): self { return new KornIcon("truck-front"); }
	public static function truckMedical(): self { return new KornIcon("truck-medical"); }
	public static function truckMonster(): self { return new KornIcon("truck-monster"); }
	public static function truckMoving(): self { return new KornIcon("truck-moving"); }
	public static function truckPickup(): self { return new KornIcon("truck-pickup"); }
	public static function truckPlane(): self { return new KornIcon("truck-plane"); }
	public static function truckRampBox(): self { return new KornIcon("truck-ramp-box"); }
	public static function tty(): self { return new KornIcon("tty"); }
	public static function turkishLiraSign(): self { return new KornIcon("turkish-lira-sign"); }
	public static function turnDown(): self { return new KornIcon("turn-down"); }
	public static function turnUp(): self { return new KornIcon("turn-up"); }
	public static function tv(): self { return new KornIcon("tv"); }
	public static function u(): self { return new KornIcon("u"); }
	public static function umbrella(): self { return new KornIcon("umbrella"); }
	public static function umbrellaBeach(): self { return new KornIcon("umbrella-beach"); }
	public static function underline(): self { return new KornIcon("underline"); }
	public static function universalAccess(): self { return new KornIcon("universal-access"); }
	public static function unlock(): self { return new KornIcon("unlock"); }
	public static function unlockKeyhole(): self { return new KornIcon("unlock-keyhole"); }
	public static function upDown(): self { return new KornIcon("up-down"); }
	public static function upDownLeftRight(): self { return new KornIcon("up-down-left-right"); }
	public static function upLong(): self { return new KornIcon("up-long"); }
	public static function upRightAndDownLeftFromCenter(): self { return new KornIcon("up-right-and-down-left-from-center"); }
	public static function upRightFromSquare(): self { return new KornIcon("up-right-from-square"); }
	public static function upload(): self { return new KornIcon("upload"); }
	public static function user(): self { return new KornIcon("user"); }
	public static function userAstronaut(): self { return new KornIcon("user-astronaut"); }
	public static function userCheck(): self { return new KornIcon("user-check"); }
	public static function userClock(): self { return new KornIcon("user-clock"); }
	public static function userDoctor(): self { return new KornIcon("user-doctor"); }
	public static function userGear(): self { return new KornIcon("user-gear"); }
	public static function userGraduate(): self { return new KornIcon("user-graduate"); }
	public static function userGroup(): self { return new KornIcon("user-group"); }
	public static function userInjured(): self { return new KornIcon("user-injured"); }
	public static function userLarge(): self { return new KornIcon("user-large"); }
	public static function userLargeSlash(): self { return new KornIcon("user-large-slash"); }
	public static function userLock(): self { return new KornIcon("user-lock"); }
	public static function userMinus(): self { return new KornIcon("user-minus"); }
	public static function userNinja(): self { return new KornIcon("user-ninja"); }
	public static function userNurse(): self { return new KornIcon("user-nurse"); }
	public static function userPen(): self { return new KornIcon("user-pen"); }
	public static function userPlus(): self { return new KornIcon("user-plus"); }
	public static function userSecret(): self { return new KornIcon("user-secret"); }
	public static function userShield(): self { return new KornIcon("user-shield"); }
	public static function userSlash(): self { return new KornIcon("user-slash"); }
	public static function userTag(): self { return new KornIcon("user-tag"); }
	public static function userTie(): self { return new KornIcon("user-tie"); }
	public static function userXmark(): self { return new KornIcon("user-xmark"); }
	public static function users(): self { return new KornIcon("users"); }
	public static function usersBetweenLines(): self { return new KornIcon("users-between-lines"); }
	public static function usersGear(): self { return new KornIcon("users-gear"); }
	public static function usersLine(): self { return new KornIcon("users-line"); }
	public static function usersRays(): self { return new KornIcon("users-rays"); }
	public static function usersRectangle(): self { return new KornIcon("users-rectangle"); }
	public static function usersSlash(): self { return new KornIcon("users-slash"); }
	public static function usersViewfinder(): self { return new KornIcon("users-viewfinder"); }
	public static function utensils(): self { return new KornIcon("utensils"); }
	public static function v(): self { return new KornIcon("v"); }
	public static function vanShuttle(): self { return new KornIcon("van-shuttle"); }
	public static function vault(): self { return new KornIcon("vault"); }
	public static function vectorSquare(): self { return new KornIcon("vector-square"); }
	public static function venus(): self { return new KornIcon("venus"); }
	public static function venusDouble(): self { return new KornIcon("venus-double"); }
	public static function venusMars(): self { return new KornIcon("venus-mars"); }
	public static function vest(): self { return new KornIcon("vest"); }
	public static function vestPatches(): self { return new KornIcon("vest-patches"); }
	public static function vial(): self { return new KornIcon("vial"); }
	public static function vialCircleCheck(): self { return new KornIcon("vial-circle-check"); }
	public static function vialVirus(): self { return new KornIcon("vial-virus"); }
	public static function vials(): self { return new KornIcon("vials"); }
	public static function video(): self { return new KornIcon("video"); }
	public static function videoSlash(): self { return new KornIcon("video-slash"); }
	public static function vihara(): self { return new KornIcon("vihara"); }
	public static function virus(): self { return new KornIcon("virus"); }
	public static function virusCovid(): self { return new KornIcon("virus-covid"); }
	public static function virusCovidSlash(): self { return new KornIcon("virus-covid-slash"); }
	public static function virusSlash(): self { return new KornIcon("virus-slash"); }
	public static function viruses(): self { return new KornIcon("viruses"); }
	public static function voicemail(): self { return new KornIcon("voicemail"); }
	public static function volcano(): self { return new KornIcon("volcano"); }
	public static function volleyball(): self { return new KornIcon("volleyball"); }
	public static function volumeHigh(): self { return new KornIcon("volume-high"); }
	public static function volumeLow(): self { return new KornIcon("volume-low"); }
	public static function volumeOff(): self { return new KornIcon("volume-off"); }
	public static function volumeXmark(): self { return new KornIcon("volume-xmark"); }
	public static function vrCardboard(): self { return new KornIcon("vr-cardboard"); }
	public static function w(): self { return new KornIcon("w"); }
	public static function walkieTalkie(): self { return new KornIcon("walkie-talkie"); }
	public static function wallet(): self { return new KornIcon("wallet"); }
	public static function wandMagic(): self { return new KornIcon("wand-magic"); }
	public static function wandMagicSparkles(): self { return new KornIcon("wand-magic-sparkles"); }
	public static function wandSparkles(): self { return new KornIcon("wand-sparkles"); }
	public static function warehouse(): self { return new KornIcon("warehouse"); }
	public static function water(): self { return new KornIcon("water"); }
	public static function waterLadder(): self { return new KornIcon("water-ladder"); }
	public static function waveSquare(): self { return new KornIcon("wave-square"); }
	public static function weightHanging(): self { return new KornIcon("weight-hanging"); }
	public static function weightScale(): self { return new KornIcon("weight-scale"); }
	public static function wheatAwn(): self { return new KornIcon("wheat-awn"); }
	public static function wheatAwnCircleExclamation(): self { return new KornIcon("wheat-awn-circle-exclamation"); }
	public static function wheelchair(): self { return new KornIcon("wheelchair"); }
	public static function wheelchairMove(): self { return new KornIcon("wheelchair-move"); }
	public static function whiskeyGlass(): self { return new KornIcon("whiskey-glass"); }
	public static function wifi(): self { return new KornIcon("wifi"); }
	public static function wind(): self { return new KornIcon("wind"); }
	public static function windowMaximize(): self { return new KornIcon("window-maximize"); }
	public static function windowMinimize(): self { return new KornIcon("window-minimize"); }
	public static function windowRestore(): self { return new KornIcon("window-restore"); }
	public static function wineBottle(): self { return new KornIcon("wine-bottle"); }
	public static function wineGlass(): self { return new KornIcon("wine-glass"); }
	public static function wineGlassEmpty(): self { return new KornIcon("wine-glass-empty"); }
	public static function wonSign(): self { return new KornIcon("won-sign"); }
	public static function worm(): self { return new KornIcon("worm"); }
	public static function wrench(): self { return new KornIcon("wrench"); }
	public static function x(): self { return new KornIcon("x"); }
	public static function xRay(): self { return new KornIcon("x-ray"); }
	public static function xmark(): self { return new KornIcon("xmark"); }
	public static function xmarksLines(): self { return new KornIcon("xmarks-lines"); }
	public static function y(): self { return new KornIcon("y"); }
	public static function yenSign(): self { return new KornIcon("yen-sign"); }
	public static function yinYang(): self { return new KornIcon("yin-yang"); }
	public static function z(): self { return new KornIcon("z"); }
	//endregion
}