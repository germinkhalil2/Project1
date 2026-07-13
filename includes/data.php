<?php
/**
 * data.php
 * Central data source for Italia Through Time.
 * Holds the artifact catalog and the historical timeline as PHP arrays.
 * Every page includes this file and renders from these arrays with foreach —
 * no content is hand-duplicated across pages.
 */

// ---------------------------------------------------------------
// Timeline eras — five chronological periods of Italian history.
// Each artifact below is tagged with one of these era slugs.
// ---------------------------------------------------------------
$timeline = [
    [
        'slug'        => 'ancient-rome',
        'numeral'     => 'I',
        'title'       => 'Ancient Rome',
        'dates'       => 'c. 753 – 27 BCE',
        'description' => 'From a cluster of hilltop settlements to a dominant republic, early Rome built the political and military foundation for everything that followed. This era is defined by the founding myths, the rise of the Senate, and the slow conquest of the Italian peninsula.',
    ],
    [
        'slug'        => 'roman-empire',
        'numeral'     => 'II',
        'title'       => 'The Roman Empire',
        'dates'       => '27 BCE – 476 CE',
        'description' => 'Under the emperors, Rome became the engineering and artistic capital of the Mediterranean world. Monumental architecture, road networks, and public spectacle projected Roman power from Britain to North Africa.',
    ],
    [
        'slug'        => 'renaissance',
        'numeral'     => 'III',
        'title'       => 'The Renaissance',
        'dates'       => '14th – 17th century',
        'description' => 'Centered in Florence, Rome, and Venice, the Renaissance reintroduced classical ideals into art, architecture, and science. Patronage from wealthy families and the Church produced some of the most studied works in Western art.',
    ],
    [
        'slug'        => 'unification',
        'numeral'     => 'IV',
        'title'       => 'Unification of Italy',
        'dates'       => '1815 – 1871',
        'description' => 'The Risorgimento movement unified a peninsula of fragmented kingdoms, duchies, and city-states into a single nation. Symbols created during this period — flags, monuments, and civic architecture — still define Italian national identity.',
    ],
    [
        'slug'        => 'modern',
        'numeral'     => 'V',
        'title'       => 'Modern Italy',
        'dates'       => '1871 – Present',
        'description' => 'Industrial growth, rationalist architecture, and postwar design turned Italy into a global center for style and engineering — from monumental civic buildings to objects now found in design museums worldwide.',
    ],
];

// ---------------------------------------------------------------
// Category labels used for the gallery filter dropdown.
// ---------------------------------------------------------------
$categories = [
    'architecture' => 'Architecture',
    'sculpture'    => 'Sculpture',
    'painting'     => 'Painting',
    'mosaic'       => 'Mosaic',
    'textile'      => 'Textile',
    'design'       => 'Design',
];

// ---------------------------------------------------------------
// Artifact catalog — the core PHP array rendered with foreach
// throughout the site (home, gallery, artifact detail, timeline).
// 'image' paths are placeholders — swap in real photos before
// submission. If an image file is missing, the card still shows
// a styled plaque with the artifact name (see css/style.css).
// ---------------------------------------------------------------
$artifacts = [
    [
        'id'          => 1,
        'name'        => 'The Capitoline Wolf',
        'cat'         => 'sculpture',
        'period'      => 'ancient-rome',
        'location'    => 'Capitoline Museums, Rome',
        'image'       => 'images/artifacts/CapitolineWolf.jpg',
        'summary'     => 'A bronze she-wolf nursing the twins Romulus and Remus, the enduring symbol of Rome\'s founding myth.',
        'description' => 'The Capitoline Wolf depicts the legendary she-wolf who, according to Roman mythology, found and nursed the abandoned twins Romulus and Remus on the banks of the Tiber. Romulus would go on to found the city of Rome. The bronze figures of the twins were added centuries after the wolf itself, but together the group became one of the most recognized emblems of the city — reproduced on everything from civic seals to modern souvenirs.',
    ],
    [
        'id'          => 2,
        'name'        => 'The Roman Forum',
        'cat'         => 'architecture',
        'period'      => 'ancient-rome',
        'location'    => 'Rome',
        'image'       => 'images/artifacts/RomanForum.jpg',
        'summary'     => 'The political, religious, and commercial heart of the Roman Republic, now a sprawling field of ruins.',
        'description' => 'Once the center of daily life in ancient Rome, the Forum housed temples, law courts, and the speaking platforms where senators debated the fate of the Republic. Triumphal processions marched through its center, and major political announcements were made from its rostra. Today its columns and foundations remain one of the most visited archaeological sites in the world, offering a direct physical link to Republican-era Rome.',
    ],
    [
        'id'          => 3,
        'name'        => 'The Colosseum',
        'cat'         => 'architecture',
        'period'      => 'roman-empire',
        'location'    => 'Rome',
        'image'       => 'images/artifacts/colosseum.jpg',
        'summary'     => 'The largest amphitheater ever built, capable of holding tens of thousands of spectators for public games.',
        'description' => 'Commissioned under the Flavian dynasty, the Colosseum could seat an estimated 50,000 to 80,000 spectators for gladiatorial contests, animal hunts, and staged battles. Its system of vaulted arches and elevator shafts beneath the arena floor represented a peak of Roman engineering. The structure has survived earthquakes, stone-robbing, and nearly two thousand years of weather, and remains the most recognizable symbol of Imperial Rome.',
    ],
    [
        'id'          => 4,
        'name'        => 'The Alexander Mosaic',
        'cat'         => 'mosaic',
        'period'      => 'roman-empire',
        'location'    => 'National Archaeological Museum, Naples (originally Pompeii)',
        'image'       => 'images/artifacts/AlexanderMosaic.jpg',
        'summary'     => 'A vast floor mosaic depicting Alexander the Great in battle, originally set into a villa floor at Pompeii.',
        'description' => 'Composed of an estimated one and a half million individual tesserae, this floor mosaic once decorated the House of the Faun in Pompeii and depicts a chaotic battle scene believed to show Alexander the Great confronting Darius III of Persia. Preserved by the same volcanic ash that buried Pompeii in 79 CE, it offers rare insight into how Roman elites decorated their homes with scenes borrowed from Greek history and myth.',
    ],
    [
        'id'          => 5,
        'name'        => "Michelangelo's David",
        'cat'         => 'sculpture',
        'period'      => 'renaissance',
        'location'    => 'Galleria dell\'Accademia, Florence',
        'image'       => 'images/artifacts/DavidbyMichelangelo.jpg',
        'summary'     => 'A seventeen-foot marble figure of the biblical David, poised and watchful before his fight with Goliath.',
        'description' => 'Carved from a single block of Carrara marble, David depicts the moment before the biblical hero confronts Goliath — tense, alert, and unarmored. Originally intended for the roofline of Florence Cathedral, the statue proved too heavy and was instead placed in the city\'s main square as a civic symbol of vigilance and resolve. It remains one of the most studied works of Renaissance sculpture for its anatomical precision and psychological depth.',
    ],
    [
        'id'          => 6,
        'name'        => 'The Birth of Venus',
        'cat'         => 'painting',
        'period'      => 'renaissance',
        'location'    => 'Uffizi Gallery, Florence',
        'image'       => 'images/artifacts/BirthofVenus.jpg',
        'summary'     => "Sandro Botticelli's painting of the goddess Venus arriving on shore, one of the era's most reproduced images.",
        'description' => 'Painted by Sandro Botticelli for the Medici family, this large-scale work shows the goddess Venus emerging fully formed from the sea, blown ashore by the wind gods. Its use of a mythological, non-religious subject was unusual for its time and reflected the Renaissance revival of classical themes under wealthy Florentine patronage. The painting\'s flowing lines and idealized figure have made it one of the most reproduced images in Western art history.',
    ],
    [
        'id'          => 7,
        'name'        => 'The Vittoriano',
        'cat'         => 'architecture',
        'period'      => 'unification',
        'location'    => 'Rome',
        'image'       => 'images/artifacts/TheVittoriano.jpg',
        'summary'     => 'A monumental white marble complex built to honor Italy\'s first king and celebrate national unification.',
        'description' => 'Built to commemorate Victor Emmanuel II, the first king of a unified Italy, the Vittoriano dominates central Rome with its sweeping staircases, columned porticos, and equestrian statue. Construction spanned decades around the turn of the twentieth century and the monument later became home to Italy\'s Tomb of the Unknown Soldier, cementing its role as a national symbol of the unification movement.',
    ],
    [
        'id'          => 8,
        'name'        => 'The Tricolore of Reggio Emilia',
        'cat'         => 'textile',
        'period'      => 'unification',
        'location'    => 'Museo del Tricolore, Reggio Emilia',
        'image'       => 'images/artifacts/TricoloreofReggioEmilia.webp',
        'summary'     => 'The green, white, and red flag first adopted in 1797, later becoming the national flag of unified Italy.',
        'description' => 'First adopted by the Cispadane Republic in the city of Reggio Emilia, the green-white-red tricolore predates Italian unification by more than sixty years. As the Risorgimento movement gained momentum through the nineteenth century, the flag was adopted by unification fighters as a shared symbol across the fragmented Italian states, and it became the official flag of the Kingdom of Italy in 1861.',
    ],
    [
        'id'          => 9,
        'name'        => 'Palazzo della Civiltà Italiana',
        'cat'         => 'architecture',
        'period'      => 'modern',
        'location'    => 'EUR district, Rome',
        'image'       => 'images/artifacts/PalazzodellaCivilta.jpg',
        'summary'     => 'A monumental rationalist building of repeating arches, nicknamed the "Square Colosseum."',
        'description' => 'Built for a world exhibition planned for 1942, the Palazzo della Civiltà Italiana reinterprets the Colosseum\'s arches in stark, geometric white travertine. Its six rows of nine arches per side gave it the popular nickname "Square Colosseum." The building is now regarded as one of the defining works of twentieth-century Italian rationalist architecture and today houses a major fashion house\'s headquarters.',
    ],
    [
        'id'          => 10,
        'name'        => 'The Vespa',
        'cat'         => 'design',
        'period'      => 'modern',
        'location'    => 'Piaggio & C., Pontedera',
        'image'       => 'images/artifacts/TheVespa.JPG',
        'summary'     => 'The 1946 scooter design that became a global icon of postwar Italian industrial design.',
        'description' => 'Designed by aeronautical engineer Corradino D\'Ascanio in the aftermath of the Second World War, the Vespa offered affordable, easy-to-ride transportation for a country rebuilding its infrastructure. Its enclosed engine, step-through frame, and rounded bodywork — said to resemble a wasp, giving the scooter its name — made it an instant civilian success and, decades later, a defining object of Italian design collections worldwide.',
    ],
];

/**
 * Helper: look up a timeline era by its slug.
 * Used on the artifact detail page to show which era an artifact belongs to.
 */
function findEra(array $timeline, string $slug): ?array
{
    foreach ($timeline as $era) {
        if ($era['slug'] === $slug) {
            return $era;
        }
    }
    return null;
}

/**
 * Helper: look up an artifact by its id.
 * Used on the artifact detail page — validates the id exists before rendering.
 */
function findArtifact(array $artifacts, int $id): ?array
{
    foreach ($artifacts as $art) {
        if ($art['id'] === $id) {
            return $art;
        }
    }
    return null;
}