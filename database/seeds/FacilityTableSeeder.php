<?php

use App\Facility;
use App\Location;
use App\GeoLocCode;

use Illuminate\Database\Seeder;

class FacilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            ["530763053", "Joint Base Lewis-McChord", "joint-base-lewis-mcchord", "Joint Base Lewis-McChord is located near Lakewood, Washington and is part of the United States Army Installation Management Command. It is home to over 45,000 service members and civilian workers, supports 120,000 veterans with more than 29,000 family members. 

The base was created when the Air Force's McChord Air Force Base and the Army's Fort Lewis merged on February 1, 2010 due to the Base Realignment and Closer Commission recommendations of 2005. Due to its location, it can make use of the Olympia, Seattle, and Tacoma ports for deploying equipment, as well as having the ability for its Air Force units to conduct humanitarian and combat airlifts. 

The base serves several purposes, including supporting active military members, veterans, and the general military community. Of course, it also trains new soldiers and maintains reserves in case they are ever needed."],
            ["341530005", "Joint Base McGuire-Dix-Lakehurst", "joint-base-mcguire-dix-lakehurst", "Joint Base McGuire-Dix-Lakehurst (JBMDL), located in New Jersey, is the only joint base with Air Force, Army and Navy installations. It was established when, in 2005, the U.S. Government announced the merging of three separate military bases, McGuire Air Force Base, Fort Dix and Naval Air Station Lakehurst. Each installation serves its own branch, but all three share resources and capabilities. 

Joint Base McGuire-Dix-Lakehurst is the second-largest employer in New Jersey and generates $6.9 billion in revenue for the local economy. The base employs an estimated 65,500 people, directly or indirectly. Of note, NAS Lakehurst, one component of the base, is most famous as the site of the Hindenburg disaster.

The 87th Air Base Wing is the host wing at JBMDL. The base is home to more than 80 mission partners, such as active and reserve units, tenants and Department of Defense units."],
            ["061881019", "Naval Air Station Lemoore", "naval-air-station-lemoore", "The Naval Air Station Lemoore, located in the Fresno and King counties of California, or the Central Valley, is the United States Navy's newest and largest Master Jet Base. Commissioned in 1961, NAS Lemoore's population includes approximately 6,500 military personnel, as of 2016, and roughly 11,000 dependents.

NAS Lemoore's current operations include hosting the entire fighter/attack capability for the west coast. Lemoore is also home to some 175 Hornets and Super Hornets. NAS Lemoore's strategic position gives residents easy access to diverse cultural offerings, with the historic downtown areas of Visalia and Hanford nearby as well as Yosemite and Sequoia National Parks.

The Navy settled upon the current site for NAS Lemoore in 1954, after scouting for a location to serve as a master jet air base. The Navy's goal was a location with congestion-free air space. The Navy chose Lemoore because it has good weather for flying, is relatively inexpensive and is near to wonderful accommodations."],
            ["062342073", "Naval Medical Center San Diego", "naval-medical-center-san-diego", "Also known as Bob Wilson Naval Hospital, Naval Medical Center San Diego is located in Balboa Park in San Diego, California. The center's mission is provide medical care to not only operational forces and their families, but to veterans as well.

Balboa Park served as a military hospital during World War I, and was later the location of a newly-constructed Naval hospital that opened in 1925. However, the hospital in operation today was officially opened in 1988. 

Today, the hospital has medical mobilization teams that deploy around the world. The hospital also serves as a major training facility and research center. It is also affiliated with multiple San Diego area hospitals, including the University of California, San Diego, Children's Hospital and Health Center, and Scripps Clinic and Research Foundation."],
            ["062351053", "Naval Postgraduate School", "naval-postgraduate-school", "The Naval Postgraduate School is a university operated by the United States Navy. The university is located in Monterey, California. The area surrounding the university are renowned for their nautical sights, including Fisherman's Wharf. The Naval Postgraduate School offers a number of graduate-level degree degrees as well as fellowships.

Established in 1909, nearly 1,300 students attend the Naval Postgraduate School. Most of these students are officers from the various branches of the military, officers from about 30 ally nations, and a sizable but still small number of civilians from federal and state governments.

The school focuses on fields of study typically associated with civilian graduate schools and how those skills can be applied to the navy, whereas many military-run schools focus on fields of study fairly unique to the military."],
            ["062344073", "Naval Base San Diego", "naval-base-san-diego", "Naval Base San Diego, also known as 32nd Street Naval Station, is the principal home port of the U.S. Navy's Pacific Fleet, which consists of 50 ships and over 120 tenant commands. These ships include Navy ships, Combat ships, Coast Guard Cutters, and Military Sealift Command ships.

Located in San Diego, California, it is made up of over 1,600 acres of land and 326 acres of water. The land was acquired by the Navy in 1920 as a Navy ship repair facility and underwent massive expansions during World War II.

Today, the population of the base is around 20,000 military personnel and 6,000 civilians. On base, there are support services, including Commissary shopping centers, food services, family services, recreation, medical and dental care, religious services, legal support, counseling and assistance, educational services, and child care."],
            ["110200001", "Naval Observatory", "naval-observatory", "The United States Naval Observatory (USNO) is known as one of the oldest scientific agencies in the United States. The USNO is located in Northwest Washington D.C. at Embassy Row. There are four departments within the observatory; Astronomical Applications - established in 1990, Astrometry, Earth Orientation, and Time Service. 

Created on December of 1830, the Observatory produces Positioning, Navigation, and Timing (PNT) for the U.S. Navy and the Department of Defense. Although it was first known as the Depot of Charts and Instruments, the agency's name was changed to the U.S. Naval Observatory in 1844.

Currently, the Naval Observatory employs several hundred individuals and continues to perform essential duties that are vital to the United States and other government agencies. The USNO's mission includes determining and maintaining the U.S. Master Clock, and defining the positions and directions of the planets, stars, and other astral objects."],
            ["110250001", "Naval Research Laboratory", "naval-research-laboratory", "The Naval Research Laboratory in Washington D.C. is the primary corporate research laboratory for both the United States Navy and the United States Marine Corps. The laboratory conducts both basic and applied research, with a specific focus on research that enhances the Navy's capacity around the world.

Thomas Edison first floated the idea for a Naval Research Laboratory in 1915, but World War I delayed the opening of the lab and operations did not officially begin until 1923. The facility grew rapidly during World War II and now employs more than 2,500 people, filling out a site on the Potomac River in the District of Columbia.

Among the many accomplishments of the Naval Research Laboratory is the development of the Global Positioning System (GPS), radar, and nuclear-powered submarines. GPS, in particular, has become one of the most-used commercial technologies of the 21st century."],
            ["158206003", "Joint Base Pearl Harbor-Hickam", "joint-base-pearl-harbor-hickam", "Joint Base Pearl Harbor-Hickam is a Navy-operated base near Honolulu. It was created under the Base Closure and Realignment Commission. The base joins historic Naval Station Pearl Harbor with Hickam Field Air Base. 

Established in the early 1900s, Pearl Harbor served U.S. interests in the Pacific and East Asia. Following the entry of the USS California into Pearl Harbor, the base fully developed, with Marine barracks, a naval hospital and a naval air station. Hickam Field is a naval air base established in 1938. Despite damages to both the naval base and the air field in the Japanese attack on Pearl Harbor, 1941, the joint base rebounded to become a quality, busy hub of U.S. interests. 

In 2005, the Naval Base and Pearl Harbor and the Air Field at Hickam joined to form the Joint Base. The Joint Base houses over 19,000 active duty military, 22,000 dependents and 12,500 retirees and family members."],
            ["425697101", "Philadelphia Naval Shipyard", "philadelphia-naval-shipyard", "The Philadelphia Naval Shipyard is located in Philadelphia, Pennsylvania. It is more commonly referred to as the Navy Yard. It is composed of a naval shipyard and commercial industries. 

The original U.S. Navy-operated shipyard in Philadelphia was built on the Delaware River in 1776. The shipyard relocated to its current location in 1917. The shipyard is known for its Naval Laboratory, where technology used for the Manhattan Project was developed. The Philadelphia Naval Shipyard built its last ship in 1970, but stores auxiliary vessels. 

Currently, the City of Philadelphia owns the Navy Yard. Naval activities currently carried out on site are related to infrastructure management, supply for the technical fields, engineering, public works and storage of retired and auxiliary vessels in the Naval Inactive Ship Maintenance Facility. The shipyard is also home to commercial industries such as textile manufacturing. In total, the Navy Yard employs roughly 30,000 people."],
            ["510702810", "Dam Neck Annex", "dam-neck-annex", "Dam Neck Annex is located about five miles south of Virginia Beach, Va. It is near the site of where the first settlers landed in Jamestown. Many battles of the Revolutionary War were fought in this area, as well. 

Established in 1941, Dam Neck was first intended to train fleet personnel as an anti-aircraft gunnery range. Today, Dam Neck Annex houses 20 tenant commands focused on Navy training and support activities. 

Dam Neck is uniquely situated within 30 minutes of half of NATO command, joint forces and the American fleet. It's also near Naval Air Station Oceana and Army and Air Force commands, allowing it to easily provide testing and training services. In addition, Dam Neck, Newport News shipbuilders and Virginia academic institutions cooperate on research, testing and training activities."],
            ["511683199", "Naval Weapons Station Yorktown", "naval-weapons-station-yorktown", "Yorktown, VA is home to Naval Weapons Station (NAVWPNSTA) Yorktown. The location is steeped in colonial history. The U.S. Navy acquired the land for the installation in 1918, after World War I began. It was originally the home of the Navy Mine Depot. In 1958, on the installation's 40th birthday, it was renamed to reflect its broader role in the context of the Navy. Today NAVWPNSTA Yorktown supports the Atlantic Fleet with ordinance and supplies. 

NAVWPNSTA Yorktown houses 37 tenant commands including the Navy Expeditionary Logistics Support Group, Navy Munitions Command, Navy Cargo Handling Battalion One, Naval Ophthalmic Support and Training, the Fleet Industrial Supply Center, and the Marine Corps Security Force Regiment.

Over 31,000 people are employed at NAVWPNSTA Yorktown. A little over half of the employees are white-collar workers, while the rest are blue-collar workers."],
            ["511686710", "Naval Station Norfolk", "naval-station-norfolk", "Norfolk, Virginia is home to the largest naval station in the world, Naval Station Norfolk (NS Norfolk). The location, sometimes known as &quot;Hampton Roads,&quot; is home to over 1.6 million people. Seventy-five ships and 134 aircraft operate out of NS Norfolk. Fleets serving in the Atlantic and Indian Oceans and the Mediterranean Sea call Norfolk their homeport. 

The Navy purchased the land for NS Norfolk in 1917, following our entry into World War I. After World War II broke out, NS Norfolk saw an influx of funding and growth. The station served an integral role in providing refuge for evacuees during the Cuban Missile Crisis (1962) and Operation Sincere Welcome (1994). 

Today, NS Norfolk is the designator for two previously separate installations: Naval Station Norfolk and Naval Air Station. According to a 2014 report, there are over 83,000 military workers in Hampton Roads and over 49,000 military workers in Norfolk."],
            ["531457035", "Naval Hospital Bremerton", "naval-hospital-bremerton", "Located in Bremerton, Washington, Naval Hospital Bremerton specializes in acute care and obstetrics. The Hospital also offers primary care, emergency care and surgical services. Its three Branch Health Clinics are Puget Sound Naval Shipyard, NBK Bangor and Naval Station Everett. The hospital also operates the Puget Sound Family Medicine Residency Program. 

The mission of the hospital is to provide regular and primary care and to train medical personnel for work with the armed services. Branch Clinic Bangor, in Silverdale, Washington, offers outpatient clinics, a pharmacy, radiology and a laboratory. Branch Clinic Everett, in Everett, Washington offers services such as same-day surgery, labor and delivery pediatrics, ENT and dental. 

Naval Hospital Bremerton has 1,400 military and civilian employees. It also hosts a number of Red Cross Volunteers. The new Urgent Care Pilot Program offers urgent care to TRICARE members. The hospital is composed of 36 beds."],
            ["062341073", "Naval Air Station San Diego", "naval-air-station-san-diego", "Naval Air Station San Diego (also referred to as Naval Air Station North Island) is an aviation facility belonging to the United States Navy. It is located on the northern Coronado Peninsula as well as on the San Diego Bay in California. 

The station was commissioned by the U.S. Navy in 1917, where it steadily grew into one of the military branch's most important aviation assets. It served as an integral part of the United States' Pacific operations during World War II, and was recognized by the House Armed Services Committee as the &quot;Birthplace of Naval Aviation&quot; in 1963. 

As one of the largest aerospace employers in San Diego, NAS North Island hosts 23 aircraft squadrons and 80 additional tenants, with plenty of job opportunities for civilians. These additional tenants include the Naval Aviation Depot, which alone employs over 3,800 civilians."],
            ["121581087", "Naval Air Station Key West", "naval-air-station-key-west", "Situated on Boca Chica Key in Monroe County, Florida, Naval Air Station Key West supports readiness and operational requirements for allied forces, federal agencies, National Guard units, Department of Homeland Security and the Department of Defense. The NAS Key West community includes retirees, foreign dignitaries, civilian employees, Coast Guard, Army and Air Force as well as Marines and Navy.

The cost of living in Key West is roughly 20 percent higher than the national average, and the economy and jobs are primarily tourism-based. The area population is roughly 23,000, with employment types split mostly between food service, retail and social services. The median family income is $50,000, as of 2016.

Naval Officer Matthew C. Perry placed an American flag in the Keys in 1822, which was part of the United States' proactive measures against piracy in the area. The United States established a Naval base in the Keys in 1823. The current base is 95 miles north of Cuba and only a three-hour drive from Miami."],
            ["122164031", "Naval Air Station Jacksonville", "naval-air-station-jacksonville", "Naval Air Station Jacksonville, also called NAS Jax, is located just a few miles south of Jacksonville, Florida. Though the location has been used by the U.S. Military since World War I, it was only commissioned as Naval Air Station Jacksonville in October of 1940. During World War II, the Air Station underwent massive expansion, including the addition of three runways, seaplane runways, a hospital, and a prisoner-of-war compound.

The largest Navy base in the Southeast and third largest in the nation, NAS Jax is a naval activity hub that employees 23,000 personnel. In 2012, the installation received the 2012 Presidential Excellence Award, and in 2013, the Commander, Navy Installations Command Excellence Award.

On-base support facilities include pilot training, a maintenance depot, a Naval hospital, a fleet industrial supply center, a commissary, Navy Exchange, and recreational facilities for sailors and their families."],
            ["122156033", "Naval Air Station Pensacola", "naval-air-station-pensacola", "The Naval Air Station in Pensacola, Florida is located on the northern Gulf Coast of Florida in Escambia County. NAS Pensacola, commanded by the United States Navy, was founded in 1913. It is the primary training base for Marine, Navy, and Coast Guard pilots. The station's Forrest Sherman Field is the advanced training ground for the majority of Naval Flight Officers, and it has the honor of being the home field of the famous Blue Angels.

Over 16,000 military personnel and 7,400 civilians work at NAS Pensacola. The number of flight students graduating yearly hit the 60,000 mark and make the base one of the largest aviation training operations in the Navy.

The deep water port of the harbor supported the establishment of a busy Navy Yard in the 1800s, and continues to enhance modern operations. The Naval Air Station and the city of Pensacola continue to make history together."],
            ["122158031", "Naval Hospital Jacksonville", "naval-hospital-jacksonville", "Naval Hospital Jacksonville is the third largest hospital operated by the United States Navy. In addition to the main hospital, Naval Hospital Jacksonville operates five Branch Health Clinics in Florida and Georgia. It employs 2,500 military personnel and civilians, from doctors and nurses, to dentists and administrative staff, to offer a full range of quality services. 

All Naval Branch Health Clinics offer preventative and urgent care. The Naval Branch Health Clinic Jacksonville treats active duty military exclusively. Other Naval Branch Health Clinics are located in Albany, Georgia; Key West, Florida; Kings Bay, Georgia; and NBHS Mayport in Jacksonville.

The hospital includes a pharmacy and laboratory, as well as emergency and urgent care, prenatal care and surgery. Outpatient clinics include allergies, cardiology, dental, deployment health, dermatology, diabetes, ENT, family medicine, wellness, immunizations, mental health, nutrition, occupational health, pediatrics and sports medicine. The hospital also offers a Substance Abuse Rehabilitation Program."],
            ["122160005", "NSWC Panama City", "nswc-panama-city", "Located in Panama City, Florida, the Naval Surface Warfare Center Panama City is the research and development arm of Naval Support Activity Panama City, or NSA PC, a military base. NSWC Panama City is part of the Naval Sea Systems Command of Naval Surface Warfare Centers. The NAVSEA's mission entails designing, building, delivering and maintaining ships in a timely and cost effective manner for the U.S. Navy.

NSWC Panama City employs approximately 1,000 to 5,000 employees as of 2016, according to its LinkedIn profile. NSWC Panama City specifically provides research, development and support for several U.S. Navy core missions, such as diving and life support systems, amphibious and expeditionary maneuver warfare systems, naval special warfare systems, and mine warfare systems.

The U.S. NSA PC began its life as the U.S. Navy Mine Countermeasures Station in 1945. It received new names in 1955 and 1972, at last receiving its current name in 2007. The base has waterfront port and naval helicopter facilities."],
            ["122163033", "Naval Air Technical Training Center", "naval-air-technical-training-center", "Located in Naval Air Station in Pensacola, Florida, the Naval Air Technical Training Center is operated by the United States Navy. The training center consists of three schools. It trains a class of roughly 15,000 students in technical skills for the United States Navy, Marine Corps and Cost Guard. 

Established in 1942, the Naval Air Station trained military personnel through World War II, the Korean War, the Vietnam War and other major conflicts. Its storied history informs its mission to produce the best-trained sailors of today. 

The &quot;A&quot; schools enroll the largest segment of the student body for technical jobs as a petty officer, third class. Advanced schools also provide training at higher levels. Technical training for officers is available through the Naval Air Technical Training Center."],
            ["122161095", "Naval Air Warfare Center Training Systems Division", "naval-air-warfare-center-training-systems-division", "Naval Air Warfare Center Training Systems Division, or NAWCTSD, is located in Orlando, Florida. It is one of the cornerstones of the National Center for Simulation and offers services and products that entail training solutions for surface and subsurface, aviation for the U.S. Marine Corps, programs and devices for the U.S. Navy, and life cycle program management.

The NAWCTSD integrates science and performance-based training to achieve its teaching and learning objectives. Other primary duties include serving as the U.S. Navy's principal site for acquisition, research, development, testing and evaluation. The NAWCTSD is a division within the Naval Air Systems Command, or NAVAIR, which employs close to 10,000 people as of 2016, according to its LinkedIn profile.

The NAWCTSD dates back to Long Island, New York, in 1941, with the Special Devices Desk in the Bureau of Aeronautics of the Navy's Engineering Division. The Special Devices Desk moved to Orlando in the 1960s and in 1993 became the NAWCTSD."],
            ["133016039", "Naval Submarine Base Kings Bay", "naval-submarine-base-kings-bay", "Naval Submarine Base Kings Bay is located near the town of St. Marys, Georgia. It is run by the United States Navy and encompasses 16,000 acres, 4,000 of which are ecologically protected wetlands. Kings Bay is a major USN installation with a population of more than 15,000 military members and civilian contractors. It has three commands: Strategic Weapons Facility, Atlantic, Trident Refit Facility, and Trident Training Facility.

Kings Bay was first acquired by the U.S. Army in the early 1950s for use as an ammunition shipping depot. It was transferred to the Navy in 1974 when the American ballistic missile submarine fleet was removed from Spain via treaty.

Kings Bay currently serves as the home port for all of the Ballistic and Guided Missile Submarines of the Atlantic Fleet. The base was the result of the largest peacetime operation ever undertaken by the USN, and it is currently home to ten Ohio-class submarines."],
            ["175999097", "Naval Station Great Lakes", "naval-station-great-lakes", "Naval Station Great Lakes is located near Chicago, Illinois. It is one of the largest stations owned by the United States Navy and operates the Navy's only boot camp. It consists of nearly 1,200 buildings spread across 1,600 acres of land and functions as a small city in its own right.

The base has more than a century of history. Construction began in 1905 and consisted of 39 buildings, all of which are still standing. The original completion of the base was achieved in 1911 with the construction of the clocktower building, which is a major landmark of the base.

The primary mission of NAVSTA Great Lakes is the training of USN personnel. Around 40,000 recruits pass through the installation every year, with 7,000 on base at any given time. The base also hosts the primary technical training facilities of the USN, with 16,000 advanced students yearly and training coverage of most specialized vocations within the Navy."],
            ["183389101", "Naval Surface Warfare Center Crane", "naval-surface-warfare-center-crane", "Naval Surface Warfare Center Crane Division (NSA Crane) is a United States Navy installation established near Bloomington, Indiana in 1941. The base hosts around 3,300 permanent employees, but covers 108 square miles of space. This makes it the third largest naval base on the planet by geographic area. 

NSA Crane hosts a grove of white oak trees titled Constitution Grove, the lumber from which is used in the maintenance and care of the USS Constitution. NSA Crane hosts 14 separate commands and divisions, in accordance with the USN initiative to focus on multi-functional bases that began in the late 1990s.

NSA Crane is primarily focused on research, development, and engineering of advanced systems. Activities at NSA Crane can be divided into three broad categories. Strategic Missions consists of any deterrent or force-projection activity. Electronic Warfare/Information Operations is anything to do with the military application of electromagnetic energy. Special Missions supports special operations activities."],
            ["236405031", "Portsmouth Naval Shipyard", "portsmouth-naval-shipyard", "Located in Seavey Island, Kittery, Maine, the Portsmouth Naval Shipyard is the oldest naval shipyard operated by the United States Navy. The shipyard is concerned with repair and modernization of submarines. Portsmouth Naval Shipyard is one of only four of its kind remaining in the United States.

Established in 1800 under President John Adams, the Portsmouth Naval Shipyard played a role in the War of 1812, the Spanish-American War, World War I and World War II. While the last submarine built at Portsmouth Naval Shipyard was the Sand Lance, in 1969, the shipyard only overhauls, refuels and modernizes vessels at this time. 

Awarded for its modern energy management program, the Portsmouth Naval Shipyard converted half of its power to natural gas. The shipyard currently employs over 5,000 civilians and 100 naval officers. Portsmouth Naval Shipyard also has a recruitment program for active apprentices and engineers."],
            ["241095031", "Naval Surface Warfare Center", "naval-surface-warfare-center", "Charles County, Maryland is home to the Naval Surface Warfare Center, Indian Head Division (NSWC IHD). The NSWC specializes in energetics, which include explosives and reactive materials. Information collected at NSWC IHD enhances military weaponry and propulsion capabilities. Research conducted at this Navy facility is utilized by the Army, Air Force, and Marines as well. 

Scientists and energetics specialists working at the NSWC are responsible for the research and development of over 60% of our military's energetics. Approximately 75% of the explosive technologies used by the US military today were developed at NSWC IHD. The facility not only houses research and development but also maintains training and testing facilities. This site is at the forefront of the Department of Defense's Ordnance Disposal Technology Program. 

There are over 1,700 employees at the NSWC Indian Head Facility. Over half of these workers are physicists, engineers, chemists who specialize in energetics."],
            ["241096037", "Naval Air Station Patuxent River", "naval-air-station-patuxent-river", "Naval Air Station Patuxent River (also referred to as NAS Pax River) is an aviation facility located on the Chesapeake Bay in St. Mary's County, Maryland. The station belongs to the United States Navy, and serves as a center for testing and evaluation of naval aviation systems. 

Spurred by the onset of the United States' involvement in World War II, the U.S. Navy quickly acquired 6,400 acres of what was once Maryland farmland and began construction in 1942. In 1943, the station was formally commissioned, and began operations as a testing site. It later became an integral part of technology development during the Cold War, serving as a home for reconnaissance squadrons in the 1960's.

NAS Pax River employs over 9,800 federal employees and 400 non-appropriated-fund employees. The station is home to over 4,500 family members and is served by three public school systems."],
            ["340775025", "Naval Weapons Station Earle", "naval-weapons-station-earle", "Naval Weapons Station Earle is a weapons facility located on Sandy Hook Bay in New Jersey. The station belongs to the United States Navy, and is utilized by the military branch as an ammunition testing site. 

As American involvement in World War II created a rise in demand for ammunition depots in close proximity to the New York metropolitan area, a board was established to search for a suitable location. After careful consideration, the board selected the area around Sandy Hook Bay due to its rural, low-population surroundings. In 1943, the depot was commissioned, and has since been an important part of ammunition transfer because of its 2.9-mile loading pier. 

Naval Weapons Station Earle employs over 400 civilian employees in fields ranging from industrial to law enforcement. In addition, the station's area job postings include retail cashiers, waiters and waitresses, and high-skill jobs such as teachers and accountants."],
            ["440136005", "Naval Station Newport", "naval-station-newport", "Naval Station (NAVSTA) Newport is situated in the charming town of Middletown, Rhode Island. In 1883, sailors started training in Newport, and it has been an active base ever since. In 2005, the base received an influx of 500 billets under the Base Realignment and Closure Act.

Ships do not deploy from NAVSTA Newport, but the location is integral to our military's success. Over 50 tenant commands from the Navy, Coast Guard, U.S. Army Reserves,and Marine Corps call this base home. The Naval War College, Officer Candidate School, Surface Warfare School, and Naval Justice School are among the prestigious training facilities and programs housed here. 

NAVSTA Newport boasts a roster of around 5,800 employees, which makes it the third-largest employer in the state of Rhode Island."],
            ["511822810", "Naval Air Station Oceana", "naval-air-station-oceana", "Naval Air Station Oceana is also known as Apollo Soucek Field and operates as a United States Navy Master Jet Base and military airport. It is located near Virginia Beach, Virginia, and is the only Master Jet Base on the East Coast.

NAS Oceana includes Dam Neck Annex and has over 10,500 active Navy personnel and over 4,500 civilian personnel. It houses F/A-18 Hornets and Super Hornets, with 16 squadrons used for deployment on naval carriers for combat and two are permanent fixtures on NAS Oceana. The overall mission of NAS Oceana is to be a Shore-Based Readiness Integrator, which means training and deployment of strike fighter squadrons.

NAS Oceana was opened in 1943, but in the 1950s received Master Jet Base status. It spans over 6,000 acres, though the obstruction clearances and flight easements add an additional 4,000 acres. NAS Oceana is one of the biggest air stations in the world and has four runways."],
            ["532508029", "Naval Air Station Whidbey Island", "naval-air-station-whidbey-island", "Whidbey Island, in Island County, Washington, is home to Naval Air Station Whidbey Island (NAS Whidbey). The base consists of two sections. Most of the aviation work occurs at Ault Field, while Seaport Base is now home to the base's housing, the Navy Exchange, and the Commissary.

NAS Whidbey was commissioned as a U.S. Navy base on September 21, 1942, just prior to the start of World War II. The Navy initially chose the location in order to refuel their planes near Puget Sound. Since then, it has housed a variety of aircraft and has gone through many transitions. Today, NAS Whidbey is home to 17 tenant squadrons, 3 Ready Reserve squadrons, and a Search and Rescue Unit. 

The U.S. Government employs around 8,800 people in Island County, including active duty military, contractors, and civilians. The federal government is the largest employer in this rural location."],
            ["320149001", "Naval Air Station Fallon", "naval-air-station-fallon", "Naval Air Station Fallon (also referred to as NAS Fallon) is an aviation facility located in the western Nevada city of Fallon. The station belongs to the United States Navy, and is utilized by the military branch for extensive air-to-air and air-to-ground combat training. 

Originally created in 1942 as an airfield to deter a possible Japanese invasion, the site was later taken over by the U.S. Navy and has been used primarily as a training center since that time. Since 1996, the station has served as home to TOPGUN, the Navy Fighter Weapons School made famous by the 1986 film of the same name.

With approximately 200 civil service positions utilized by NAS Fallon, the station provides excellent job opportunities for individuals living in the Fallon, Nevada area. The station also provides extra work opportunities at the NAS Fallon Air Park Museum and the Morale, Welfare, and Recreation Department."],
            ["425699041", "Naval Support Activity Mechanicsburg", "naval-support-activity-mechanicsburg", "This vast naval installation is located near Enola, Pennsylvania, and the turnpike. It was established during the early 1940s to alleviate the over-capacity at existing Navy building yards and depots. This is a landlocked facility with over 150 buildings and 40 commands on 806 acres. 

The United States Navy manages this supply infrastructure to ensure 40 tenants receive support for daily operations. More than 4,300 personnel comprised of military, civilians, and industry-related partners serve in various capacities. They include the Navy Supply Command Headquarters for the Mid-Atlantic or CNRMA. Responsibilities also include fire safety, security, environmental controls, and public works for the installation. 

Two main mission categories include Operations and Management and Fleet and Family Readiness. The former covers the Navy's Mid-Atlantic region supply chain operations. The latter caters to lodging, recreation, and counseling services of Navy personnel assigned to the command. Requests for Navy funeral honors are also handled by this facility."],
            ["133443095", "Marine Corps Logistics Base Albany", "marine-corps-logistics-base-albany", "Marine Corps Logistics Base Albany is run by the United States Marine Corps and is located at Albany, Georgia. The base was first established in 1952. The location was primarily chosen based on favorable geography in addition to easy access to the Atlantic and the Gulf by both road and rail. 

Logistics Base Albany grew rapidly, and it currently encompasses 3300 acres while employing 2400 civilians and 600 marines. Albany is one of only two USMC logistical bases in existence; the other installation is in Barstow, California.

The primary mission of the base is the repair of U.S. Marine Corps combat equipment. It services USMC bases throughout the eastern US, and hosts the Marine Corps Logistics Command Maintenance Center. Most of this work is accomplished by civilian contractors. At the height of its activity during the Persian Gulf war, the base shipped 9 million pounds of equipment, including armored bulldozers."],
            ["372895133", "Marine Corps Air Station New River", "marine-corps-air-station-new-river", "Located in Jacksonville, North Carolina, Marine Corps Air Station New River is operated by the United States Marine Corps. It is primarily a helicopter base. The air station's guiding principles are operational competence, leadership, priorities and expeditionary readiness. Its primary mission is to provide combat support. 

Established in 1943, after breaking formal ties with Camp Lejeune, Air Station New River began as a host of amphibious aircraft. The station's historical function was to deploy helicopters to the Pacific region in the Second World War. It now provides support for efforts in Central America and the Middle East. 

Currently, Air Station New River serves as a training facility for pilots of Marine-operated helicopters. It is home to MV-22 Osprey, an advanced aircraft that combines the advantages of flying a plane with landing a helicopter. The population of Air Station New River is roughly 7,000 military personnel and 1,000 civilian employees."],
            ["372894049", "Marine Corps Air Station Cherry Point", "marine-corps-air-station-cherry-point", "Marine Corps Air Station Cherry Point (also referred to as MCAS Cherry Point) is an aviation facility located in Havelock, North Carolina. The station belongs to the United States Marine Corps, and serves as an airfield and satellite field for the military branch. 

In July of 1941, Congress authorized the station, and construction began on the 8,000 acre site the within the next month. The station was commissioned in May of 1942, where its primary purpose was to train Marine units for engagement in the Pacific theater of World War II. Since that time, it has served as an integral contributor to numerous American wars, from operations in the Vietnam War to Operation Desert Storm in the Persian Gulf War.

MCAS Cherry Point currently employs 5,771 civilian employees. In addition, the surrounding area offers job opportunities in retail sales, industrial facilities, and high-skill positions such as teaching, managing, and accounting."],
            ["040294027", "Marine Corps Air Station Yuma", "marine-corps-air-station-yuma", "Marine Corps Air Station Yuma is an air station of the U.S. Marine Corps located in Yuma, Arizona. It is known as the Marine Corps' &quot;Premier Aviation Training Facility&quot; and is home to many squadrons related to aeronautics and air combat. 

The air field buildings and space used by the Marine Corps base are actually jointly used with civilians at the Yuma International Airport, and occupies about 3,000 acres of mostly flat desert.

In 1928, the federal government purchased the initial land used. The base was originally closed in 1945 after World War II and was used for a time as the headquarters of the Bureau of Reclamation. The base was renamed to its current name in 1962, three years after the Marine Corps took control of the base from the Navy."],
            ["062194073", "Marine Corps Air Station Miramar", "marine-corps-air-station-miramar", "The Marine Air Corps Station in Miramar, California is 10 miles north of San Diego and is home to the 3rd Marine Aircraft Wing, which is a division of the 1st Marine Expeditionary Force. The city of Miramar is known as &quot;Fightertown USA&quot;, since it is home to squadrons of F-14 fighter jets.

The Air Corps Station and the city of Miramar have over 12,000 marines and sailors and the base employs hundreds of additional contracted workers. The city of Miramar continues to support the air base through countless contributions and holding annual events in honor of the marines and sailors willing to sacrifice their lives. 

The air station was once home to the Navy Fighter Weapons School, known as the TOPGUN School, and the base's airfield is named after Admiral M.A. Mitscher who in World War II led Task Force 58. The base rests on 23,000 acres of land."],
            ["080006041", "Air Force Academy", "air-force-academy", "The United States Air Force Academy is one of the most distinguished military academies in the world. Located a short distance away from Colorado Springs in the state of Colorado, the Air Force Academy was established in April of 1954. The school has a long and storied history throughout the 20th Century. While it is now under the command of the United States Air Force, the academy worked for several decades to become a separate institution from the Army and Navy, just as the Air Force itself took time to become its own separate branch of the military.

The main focus of the Air Force Academy is to train the next generation of Air Force officers. Cadets are chosen from the best applicants, and all must obtain a recommendation from a member of Congress. In addition to military training, cadets can choose from a variety of subjects to study while at the academy, including engineering, science, and the humanities.

The Air Force Academy currently employs a staff of over five hundred people. These individuals are both military personnel and civilians. Cadets at the academy number around four thousand."],
            ["020710020", "Joint Base Elmendorf-Richardson", "joint-base-elmendorf-richardson", "Located in Anchorage, Alaska, Joint Base Elmendorf-Richardson is operated by the United States Air Force. The base merges Elmendorf Air Force Base with Fort Richardson. Alaskan Command Headquarters, Joint Task Force-Alaska and several base wing units are located on the joint base.

Established in 1940, Emendorf Air Force Base played a role in the Second World War and the Cold War. Alaska's proximity to the Soviet Union made the base a strategic asset in the 1950s and 1960s. Fort Richardson was used as a holding center during the Second World War. The two installations merged in 2010 to form Joint Base Elmendorf-Richardson. 

Joint Base Elmendorf-Richardson boasts a wide rand of services for its population. The base offers several fitness centers, outdoor adventure trips, child care and youth programs and an education center. The base population is composed of 13,000 military personnel, 20,000 family members and 30,000 non-military employees."],
            ["040127019", "Davis Monthan AFB", "davis-monthan-afb", "Located within five miles of downtown Tucson, Arizona, Davis Monthan Air Force Base was originally established in 1925 as a landing field. Today, it serves as the Air Force Materiel Command's 309th Aerospace Maintenance and Regeneration Group (AMARG), which is the storage facility for superfluous military and government aircraft.

Davis Monthan AFB is a key facility for Air Combat Command. Medical, operational, and logistical support for tenant units is provided by 355th Fighter Wing, the host unit. Major tenants include the 55th Electronic Combat Group, which provides command, control and communications countermeasures, and the 563rd Rescue Group and 943rd Rescue Group, which collaborate to provide international search and rescue support. 

This AFB employs approximately 6,500 Active Duty military personnel, 1,000 Reserve and Air National Guard personnel, and 3,000 civilians."],
            ["040274013", "Luke AFB", "luke-afb" , "Luke Air Force Base is only a few miles west of Glendale, Arizona. Currently, this base trains pilots in F-16 Fighting Falcons. The population of the base is 7,500 military members and 15,000 family members at this moment. 

The United States Army scouted the Arizona area in 1940 to find a good place to train aviators. Later, Phoenix authorities bought 1,440 acres and leased them to the U.S. Government for $1 a year. Authorities named this base after Second Lieutenant Frank Luke, a legendary fighter pilot in World War I. After eighteen aerial victories, Luke was shot down over France in 1918. 

During World War II, about 12,000 fighter pilots were trained at this base. In more recent times, this base sent over 900 airmen to Iraq as a part of Operation Iraqi Freedom. This air base continues to send F-16 fighters over to Afghanistan and Iraq on command."],
            ["060278115", "Beale AFB", "beale-afb", "Beale AFB is located about ten miles east of Marysville, California, which is itself 40 miles north of Sacramento. The 2010 Census showed that Beale AFB had a population of a little over 1,300, but it is actually home to about 4,000 military personnel. 

Beale AFB covers almost 23,000 acres of pristine rolling hills and is home to an abundance of natural resources. The base was built in 1942, and has been in continual use since 1948. The host base at Beale AFB collects high-level intelligence used by the President and Congress, and is equipped with the United States' fleet of U-2 Dragon Lady, RQ-4 Global Hawk unmanned aircraft, and the MC-12 Liberty aircraft, used for reconnaissance purposes.

There are also 38 Native American sites, 45 homestead sites, and 41 World War II sites dedicated to preserving historically and culturally significant sites."],
            ["061077029", "Edwards AFB", "edwards-afb", "Edwards Air Force Base is located 15 miles east of Rosamond in southern California. It is the home of the U.S. Air Force Test Pilot School, as well as NASA's Armstrong Flight Research Center. Edwards Air Force Base was built in 1933 and has been in use ever since.

Formerly known as Muroc Air Force Base, Edwards was renamed in honor of World War II pilot Captain Glen Edwards. Numerous notable events have taken place at Edwards Air Force Base, such as Chuck Yeager's sound barrier breaking Bell X-1 flight, and planes from Edwards have been used to do flyovers at sporting events such as the Super Bowl and the Rose Bowl in Pasadena.

Edwards Air Force Base had a population of just over 2,000 people as of the 2010 Census, and the grounds cover 470 square miles that encompass both the Rogers and Rosamund dry lakes."],
            ["063883095", "Travis AFB", "travis-afb", "Travis AFB is located in the shadow of the Bay Area, near Fairfield, California. It was built in 1942 in order to help the United States' effort in World War II and originally known as Fairfield-Suisun Army Air Base. It was named after Brigadier General Robert Travis, who died in a 1950 plane crash.

The 60th Air Mobility Wing of the Air Force, the largest wing in the branch's Air Mobility Command, has been the base's host unit since June 1992. The base employs over 15,000 people, making it the largest employer in Solano County. The amount of passengers and cargo it handles makes it the country's most active military air terminal.

The branch's largest West Coast hospital is located on the base, the David Grant USAF Medical Center. Also, in the aftermath of the September 11, 2001 terrorist attacks, a number of security upgrades have been put into place."],
            ["064023083", "Vandenberg AFB", "vandenberg-afb", "Vandenberg, an Air Force Base located on the Central Coast of California, is home to approximately 2,595 Air Force personnel, as of 2016, and roughly 3,000 family members. Vandenberg was originally the northern area of an Army base named Camp Cooke.

North Camp Cooke became Cooke Air Force Base in 1957 after a select committee studied more than 200 locations in search of a training site and a combat ready missile base. The following year, the southern area of the camp, which was previously Cooke Camp proper, also became a part of Vandenberg. Vandenberg serves as a headquarters for the 30th Space Wing, whose mission is to defend the United States of America through expeditionary and installation operations.

The 30th Space Wing also overseas space and missile testing for the Department of Defense as well as using expendable boosters to place satellites into polar orbit from the West Coast. Lieutenant General David Wade of Louisiana was the commander of the 1st Missile Division at Vandenberg in 1958. Wade subsequently commanded the first operational missile unit in Air Force history."],
            ["080266005", "Buckley AFB", "buckley-afb", "Located in the Denver suburb of Aurora, Buckley Air Force Base was established in 1942. Named after Colorado native and First Lieutenant John Harold Buckley, the base services more than 92,000 active duty personnel and is the home of the 460th Space Wing. Buckley Air Force Base primarily serves as a missile defense and space surveillance station.

Buckley Air Force Base has seen many changes over the years. It served as a basic training ground for airmen during World War II, and as the United States first stand-alone Air National Guard base during the Cold War. Originally named Buckley Field, the grounds were renamed to Buckley Air Force Base in October of 2000.

Colonel John W. Wagner currently serves as the commanding officer at Buckley, as he leads the 460th Space Wing. Also garrisoned at the base is the 460th Medical Group, which provides medical services and support."],
            ["081956041", "Peterson AFB", "peterson-afb", "Located in Colorado Springs, Peterson Air Force Base acts as the home to several major military installations, including the North American Aerospace Defense Command as well as the United States Northern Command. Built in 1942, the base has been a key part of the United States missile defense program for several decades.

Peterson Air Force Base is home to the 21st Space Wing, which specializes in early warning missile defense operations. Other units at the base include the 302d Airlift Wing and 561st Network Operations Squadron. The base is named after 1st Lieutenant Edward J. Peterson, an Operations Officer who died in an accident at the airfield in 1942. 

The base is currently under the command of Colonel Douglas A. Schiess, who leads the 21st Space Wing. Over 6,000 active duty personnel, and more than 10,000 family members are assigned to Peterson Air Force Base."],
            ["082234041", "Schriever AFB", "schriever-afb", "Schriever Air Force Base is a major site of Air Force Space Command. This base is located near Colorado Springs, Colorado. Currently, Schriever is home to the 50th Space Wing, which is tasked with commanding, controlling, and warning different communications satellites. 

This base officially opened in 1983. It has only recently been given the name Schriever to honor General Bernard Adolph Schriever. Schriever was actually born in Bremen, Germany, in 1910, but he went on to be one of the most important innovators in ballistics for the United States Air Force after emigrating to the USA. He passed away in 2005. 

There are about 8,100 civilian employees and active duty officers working on this site. Many of these employees work on the control point on this base that deals with the Global Positioning System. There are many other centers on this base, including the Missile Defense Integration and Operations Center."],
            ["100132001", "Dover AFB", "dover-afb", "Dover Air Force Base is located in the state of Delaware, specifically outside of Dover. The base itself was first created and established in March of 1941 but didn't get it's own Army airfield until a few weeks after the Pearl Harbor attacks.

Dover AFB is controlled by and serves the United States Air Force and has a total of 3,394 people living in the area of the base. 

Originally, the base came into being when the U.S. Army Air Corps made it known that they needed an airfield for training, so the base was created. This facility is currently responsible for having assigned several major Air Force military commands, such as the very First Air Force command in December of 1941 and most recently, the Air Mobility Command starting in 1992 and going strong since then."],
            ["110015001", "Joint Base Anacostia-Bolling", "joint-base-anacostia-bolling", "Joint Base Anacostia-Bolling, of which Bolling AFB used to be one part, came about in 2010 as a result of a consolidation with the Naval Support Facility Anacostia. The area was built in 1917 and has been in constant use ever since.

Many major commands have been assigned to what is now Joint Base Anacostia-Bolling over its storied history, including the Director of Military Aeronautic in 1918, Headquarters of the United States Army Air Forces in 1943, and Headquarters of the United States Air Force in 1994.

The Joint Base is controlled by the Unites States Air Force, but has included support elements for Navy aviation since its inception 99 years ago. Joint Base Anacostia-Bolling is one of twelve joint bases created around the country as part of the same 2005 policy aimed at military cost efficiency."],
            ["120935091", "Eglin AFB", "eglin-afb", "Located in Okaloosa County, Florida, Eglin AFB is widely acknowledged as being the largest AFB in the United States. The base covers more than 463,000 acres, and parts of it are situated in three different Florida counties.

Eglin AFB is the home base of the Air Force's 96th Test Wing unit. This unit's primary mission is to test and evaluate different types of weapons. Established in 1935, Eglin AFB also provides public passenger airline service. More than 8,500 civilians, and more than 4,000 military personnel are employed at Eglin AFB. More than 8,000 people live on this military base, which features a wealth of scenic forest land and sandy beaches.

In addition to the large main dining facility, there are several other dining establishments located on Eglin AFB, including a snack bar at Eglin's on-base golf course."],
            ["121441086", "Homestead Air Reserve Base", "homestead-arb", "Homestead Air Reserve Base is a United States Air Force facility located just outside Homestead, Florida, in the Miami area. The base is the home of the 482nd Fighter Wing, which primarily deploys F-16's to global hotspots. 

Homestead Air Reserve Base was opened in 1942 and played a key role immediately as a key staging location for planes crossing the Atlantic. While it was briefly closed between World War II and the Korean War, the base was a critical component of American military planning during the Cuban missile crisis. If President John F. Kennedy had decided to invade Cuba, Homestead would have been the launching point.

The base continued to house a large number of planes and troops until it was hit by Hurricane Andrew in 1992. Today the base is attached to the Air Force Reserve, but continues to be the home of 1,800 personnel and many of America's F-16's."],
            ["122465009", "Patrick AFB", "patrick-afb", "Patrick AFB is a United States Air Force installation in Brevard County, Florida. Also located in the county is the massive and iconic John F. Kennedy Space Center. Though only about 1,2000 people live at Patrick AFB, over 13,000 service members, dependents, civilians, and contractors are employed on base, 10,4000 of those being members of the Armed Forces.

Patrick AFB is home to the 45th Space Wing, the unit being an Air Force Space Command. The Cape Canaveral Air Force Station is a more familiar responsibility of the 45th Space Wing. Patrick AFB was built in 1940 and was briefly out of active military use from 1947-1949.

Another important function of the military located at Patrick AFB is the Defense Equal Opportunity Management Institute, which offers courses on topics as varied as ethnic studies and communication skills for non-military personnel working with the military."],
            ["131715067", "Dobbins Air Reserve Base", "dobbins-arb", "This facility is located in Marietta, Georgia, approximately 15 miles north of Atlanta, Georgia. It is near several major thruways including Interstate 75 and U.S. Highway 41. 

The United States Air Force 94th Airlift Wing is responsible for managing the 563 acres with two runways and several super airplane hangars. This is home to Lockheed-Martin or Air Force Plant number six and three military units including the 22nd Air Force Headquarters, Georgia Army National Guard, and Naval Air Station Atlanta. 

The personnel at this facility consist of every military branch. The total number is roughly 4,500 with a combination of nearly 2,500 Air Force reservists and civilians. An additional 2,000 reservists from the Navy, Army, and Marine Corps complete the ranks. 

Its primary mission includes flight training active duty, reserve, and guard crews. They house a combat-ready team with global deployment capacity. The on-site automated weather station partners with Weatherscan and the Weather Channel."],
            ["132835051", "Hunter AFB", "hunter-afb", "Hunter AFB, known as Hunter Army Airfield, is a smaller military installation and airfield related in lower status to Fort Stewart, both of which are located in Hinesville, Georgia. Hunter houses a runway more than two miles long and an aircraft parking area more than 350 acres large.

5,000 soldiers, airmen, and coast guardsmen are located on station, as it also hosts the Coast Guard Air Station Savannah, which is equipped with MH-65 Dolphin helicopters crucial to rescue missions in the region.

72,000 square feet of Hunter belong to the Arrival/Departure Airfield Control Group Facility and nearby railhead, which work with the runway to provide a safe space for the Third Infantry Division at Fort Stewart to quickly and efficiently deploy soldiers and cargo from that base around the world."],
            ["161155039", "Mountain Home AFB", "mountain-home-afb", "Mountain Home AFB is operated by the United States Air Force and is located in southwestern Idaho. The base is a little more than 50 miles away from Boise in Elmore County. Construction of Mountain Home AFB was finished in 1943 and the base has been in continual use ever since. 

More than 3,200 people live on the base, which serves the primary mission of providing combat airpower and combat support capability that support contingency operations around the world. This mission has earned its host unit, the 366th Fighter Wing, the nickname &quot;Gunfighters.&quot;

Mountain Home began training U.S. Army Air Forces crews shortly after it opened, and provided crucial training for the 470th, 490th, and 494th Bombardment Group, which all used the B-24 Liberator. Senator George McGovern actually completed some training at Mountain Home."],
            ["181972103", "Grissom Air Reserve Base", "grissom-arb", "Grissom Air Reserve Base is operated by the United States Air Force. It is 12 miles from Kokomo, Indiana, and serves as a combination civilian and military airport. The base has a population of around 1,700 people and was named in honor of astronaut Gus Grissom.

The base was opened as Naval Air Station Bunker Hill by the U.S. Navy in 1942, and was closed at the end of the war. It was transferred to the USAF and reopened as Bunker Hill Air Force Base in 1954 and was renamed to Grissom in 1968 and was removed from active duty in 1994. It was an emergency landing site for the Space Shuttle due to its long runway.

Grissom is currently home to the 434th Air Refueling Wing and occasional reserve units from the Army and Marine Corps. The base employs a mixture of military and civilian personnel, and acts as the largest employer in Miami county."],
            ["201805177", "Forbes Air National Guard Base", "forbes-ang-base", "The Forbes Air National Guard Base is located just south of Topeka, Kansas. It was created in 1942 and continues to be used as a civil-military airport. While the Kansas Air National Guard does some operations on site, the location is mostly used for civilian flights.

When the Forbes Air National Guard Base was founded, it was primarily used by World War II militia. After the war, it was briefly shut down before reopening in 1948. Soon after, it was reopened and used for refueling military air crafts. It became a National Guard base in 1973; however, it also opened it's doors to civilians in the same year. Duel runways keep the civil flights to a designated area of the campus.

Between the Forbes Air National Guard Base and the Topeka Regional Airport, which co-operates the location, over 1,000 employees work in the area. Recent million-dollar renovations to the airport has also created a need for many professionals, including project managers, construction crew, and engineers."],
            ["232200019", "Bangor Air National Guard Base", "bangor-ang-base", "Bangor Air National Guard Base is administered by the United States Air National Guard and is located in Bangor, Maine. The permanent base population is 450, which increases to 1,100 during monthly drill.

Bangor ANGB began as the civilian Godfrey Field in 1927. It was taken over by the U.S. Army and renamed Godfrey Army Airfield before the Second World War. In 1942 it was again renamed to Dow Army Airfield. It maintained B-17 Flying Fortress and B-24 Liberator long-range heavy bombers en route to Scotland during the war. It was taken over by Strategic Air Command during the Cold War and hosted a major component of the U.S. long-range early warning RADAR system.

The base currently hosts the 101st Air Refueling Wing of the Maine ANG operating the KC-135R Stratotanker."],
            ["240025033", "Joint Base Andrews", "joint-base-andrews", "Joint Base Andrews, of which Andrews AFB was one part, was created in 2009 when Andrews AFB was merged with Naval Air Facility Washington. Operated by the United States Air Force 11th Wing, Air Force District of Washington, Joint Base Andrews is located in Prince George's County, Maryland, which borders the eastern part of Washington.

Joint Base Andrews is massive, but has a relatively normal base resident population of just under 3,000. The base is arguably most famous for serving as the host to a pair of Boeing VC-25 aircraft, which are known as Air Force One when the President of the United States is onboard the plane.

Joint Base Andrews' host wing is the 11th Wing, a non-flying wing responsible for maintaining contingency and emergency response capability critical to national security. Andrews AFB, which constitutes one part of Joint Base Andrews, was built in 1945 but had roots going as far back as the Civil War."],
            ["250478017", "Hanscom AFB", "hanscom-afb", "Hanscom AFB is operated by the United States Air Force and is located mostly in Bedford, Massachusetts, 15 miles northwest of Boston. Some of Hansom AFB is located in Concord and Lincoln as well. Hanscom AFB was built in 1942 and has been in continual use ever since.

5,000 military personnel and military civilians work and live at Hanscom AFB. Its host unit, the 66th Air Base Group, is a non-flying unit and additionally provide support services to over 100,000 people in the New England region and New York associated with the military. Hansom AFB is integrated into the community.

Hanscom AFB is part of the Air Force Life Cycle Management Center. This center is responsible for monitoring weapons systems across the Air Force for longevity and overall health."],
            ["281235047", "Keesler AFB", "keesler-afb", "Keesler AFB is operated by the United States Air Force and is located in Biloxi, Mississippi. The base was built in 1941 and has been in continual use ever since. The base is headquarters to the Second Air Force and the 81st Training Wing of the Air Education and Training Command serves as its host unit. 

Generally, Keesler AFB has around 4,700 students on base at a given time. Keesler AFB, specializing in ground trade training, provides a lot of training in electronics, avionics, and radar operations among many specialties.

Keesler AFB's host unit is the electronics training Center of Excellence for the U.S. Air Force, which handles 28,000 students annually in total. Training units for the U.S. Navy and Marine Corps also operate at Keesler AFB."],
            ["298355101", "Whiteman AFB", "whiteman-afb", "Whiteman AFB is operated by the United States Air Force and is located 70 miles away from Kansas City, Missouri near Knob Noster. The bases was built in 1928 and has been in continual since since 1963. However, it was used during World War II and the early years of the Cold War as well before 1963.

Whiteman AFB's host unit is the 509th Bomb Wing. The 509th Bomb Wing specializes in the B-2 Spirit Stealth Bomber, which was created to be used in striking high-value targets conventional aircraft can't reach for a number of reasons.

Interestingly, Whiteman AFB is a popular base in pop culture, having been one of the settings for the movie &quot;The Day After&quot; as well as the novel &quot;Plan of Attack.&quot;"],
            ["300767013", "Malmstrom AFB", "malmstrom-afb", "Malmstrom AFB is operated by the United States Air Force and is located in Great Falls, Montana, the third largest city in Montana. The base was built in 1942 and has been in continual use ever since.

Malmstrom AFB has a base resident population of under 3,500, and is one of three bases anywhere in the country that maintains the Minuteman III intercontinental ballistic missile. The base does not have a runway for aircraft operations, but its mission is supported by helicopters.

Malmstrom AFB is home to the 341st Missile Wing of the Air Force Global Strike Command. Malmstrom AFB, which was known for a time during the Cold War as Great Falls, was instrumental in the success of the Berlin Airlift, serving as the only replacement aircrew training site for C-54 Skymasters, who reinforced the American mission not just in Berlin but across Europe."],
            ["320055003", "Creech AFB", "creech-afb", "Creech AFB is a command station that is located in Indian Springs, Nevada. The base was first built in March of 1942 and then re-opened in 1948 during the Cold War.

Creech Air Force Base is naturally, under the control of the United States Air Force, under federal government ownership. The number of people employed here varies due to the isolation of the base's location.

The Creech facility is mainly an airfield but also as an aerial training site for the U.S. Air Force Thunderbirds squadron. The base also hosts several unmanned aerial vehicles and is part of the U.S. Air Combat Command. The idea for Creech AFB came during the First World War when commanders surveyed Nevada for testing sites and originally started as Indian Springs Army Airfield. However, the site was renamed Indian Springs Air Force Base and was renamed Creech AFB in 2005."],
            ["320145003", "Nellis AFB", "nellis-afb", "Nellis AFB is a base in the northeastern part of the Las Vegas Valley in Nevada. It serves as a school and training ground for the United States Air Force. It is also the home of the Air and Space Operations Center, a command center used for air and space operations by the Air Force.

The base, originally named McCarran Field, was first used by the United States Army in the early 1940s for flying and gunnery training. In 1950, McCarran Field was renamed Nellis Air Force Base and began focusing on advanced air combat training.

Today, the &quot;Home of the Fighter Pilot&quot; runs the most demanding air combat training exercises in the world. Trainees are exposed to every type of fighter plane the Air Force has to offer, and they learn how to effectively coordinate attacks with every branch of the United States military while flying them. "],
            ["330398015", "Pease Air National Guard Base", "pease-ang-base", "Pease Air National Guard Base is located in New Hampshire, about an hour south of Portland, Maine, and an hour north of Boston, Massachusetts. The base is home to the 157th Air Refueling Wing of the New Hampshire Air National Guard. Its primary responsibilities are aircraft refueling, air traffic control and homeland defense.

Pease Air National Guard Base is comprised of 40 facilities sitting on about 220 acres of land. It began as Portsmouth Municipal Airport in the 1930s. The U.S. Navy began using it as a base in World War II, until 1951, when it was chosen to become a Strategic Air Command base, under the control of the U.S. Air Force. 

It was named Pease Air Force Base in 1957, after Capt. Harl Pease, Jr., a New Hampshire native who fought in World War II."],
            ["350121009", "Cannon AFB", "cannon-afb", "Cannon Air Force Base is located in eastern New Mexico, 7 miles west of the city of Clovis. Built in 1942 during the height of World War II, the base initially served as a base of operations for bomber missions. Originally named Clovis Army Air Field, the base was renamed in honor of General John Cannon, former chief of the United States Air Forces in Europe.

The 27th Special Operations Group operates out of Cannon Air Force Base, specializing as a member of the United States Special Operations Command. Colonel Justin R. Hoffman serves as the commander of the 27th Special Operations Group, which provides combat support to joint force commanders as needed.

There are more than 4,700 active duty military personnel stationed at Cannon Air Force Base, to go along with 5,416 family members, 629 civilians and the largest group of people at the base, 5,974 retirees."],
            ["350415035", "Holloman AFB", "holloman-afb", "The Holloman Air Force Base is about 10 miles west of Alamogordo, New Mexico and is positioned between the Sacramento and San Andres mountains. Constructed in 1942 during the height of World War II, it was named after Col. George V. Holloman who conducted ground-breaking research into guided missiles. The base has been in active use since it was established.

The base and the surrounding community are home to more than 20,000 people, including active military personnel, reserve forces, government employees and family members. There is also a primary school and a middles school that serves students up to the 8th grade. 

Holloman is currently the home of the 49th Wing of the Air Combat Command as well as the 96th Test Group and 54th Fighter Group. The site also contains a German Air Force Flying Training Center, which was built by the German Luftwaffe during the spring of 1996."],
            ["350455001", "Kirtland AFB", "kirtland-afb", "Kirtland Air Force Base is located in Albuquerque, New Mexico, and is the sixth largest installation in the United States Air Force. It's the home of the Nuclear Weapons Center and employs more than 23,000 people, which includes over 4,200 active members of the Air Force.

The base was named for Col. Roy Kirtland, who organized airplane mechanics during World War II and served as facilities inspector with regard to aviation. His death in 1941 led to the naming less than a year later, upon the base's official opening. At the time of that inaugural, the base encompassed 2,000 acres, but has expanded to more than 51,000 acres.

During the Manhattan Project that took place during World War II, Kirtland served as the transportation center for the scientists that were working on it. At the conclusion of World War II, it became a place to integrate designs of new weapons."],
            ["373697051", "Fort Bragg", "fort-bragg", "The United States Army's Fort Bragg is the largest military base in the world, in terms of population, with over 50,000 active duty personnel. The 251 square mile facility is spread out across Hoke, Harnett, Cumberland and Moore counties in North Carolina. Not far away are the towns of Spring Lake, Fayetteville and Southern Pines. When it was established in 1918, it was called Camp Bragg, named after Confederate General Braxton Bragg.

Fort Bragg is the headquarters for the United States Army Special Operations Command, the XVIII Airborne Corps, Army Rangers, United States Army Forces Command, United States Army Reserve Command and the Womack Army Medical Center. Also located at Fort Bragg are two airfields, Pope Field and Simmons Army Airfield.

Fort Bragg made the news on July 3, 2016, when it became the first military installation to host a regular season Major League Baseball game between the Atlanta Braves and Miami Marlins at its newly-constructed Fort Bragg Stadium."],
            ["374155191", "Seymour Johnson AFB", "seymour-johnson-afb", "Seymour Johnson Air Force Base is located in Goldsboro, North Carolina, and is home to the 4th Fighter Wing. The base opened in 1942, and was named after a man who never actually served in the Air Force proper. Seymour Johnson was a local man who died in a plane crash in 1940 while serving as a Navy test pilot.

The 916th Air Refueling Wing is also garrisoned at Seymour Johnson Air Force Base, under the command of Colonel Eric R. Jenkins. This unit acts to refuel aircraft during training missions, as well as humanitarian operations throughout the world.

There are 4,600 active duty personnel stationed at Seymour Johnson Air Force Base, to go along with 882 reservists, over 6,000 family members, and nearly 1,000 civilians. The base itself occupies 3,300 acres of land in eastern North Carolina, and is surrounded by small farm communities."],
            ["381282035", "Grand Forks AFB", "grand-forks-afb", "Grand Forks Air Force Base is located in North Dakota, about 15 miles west of the city of Grand Forks. It is home to the Air Mobility Command's 319th Air Base Wing. The Wing is composed of two groups: Medical and Mission Support. 

Established in 1955, Grand Forks Air Force Base initially was an Air Defense Command fighter-interceptor air base during the Cold War between Russia and the U.S. Today, about 6,300 military personnel live on the base. 

Originally known for refueling tankers and bombers, Grand Forks Air Force Base now is home to drones and other unmanned aircraft. The base enjoys a solid relationship with the city of Grand Forks, leasing 217 acres to the city for a drone tech park."],
            ["382172101", "Minot AFB", "minot-afb", "13 miles north of the city of Minot lies Minot Air Force Base, which was established in 1957 as a part of the United States Air Defense Command. Minot AFB is the home to the 5th Bomb Wing, as well as the 91st Missile Wing, both of which serve the Air Force Global Strike Command.

Minot Air Force Base has had a couple of nuclear weapons mishaps over the years. In 2007, a B-52 bomber mistakenly left the base while carrying nuclear warheads. Less than a year later, three Air Force personnel fell asleep while in control of a device that contained old nuclear missile launch codes.

There are 5,234 active duty members of the military stationed at Minot Air Force Base, in addition to 5,480 family members and 677 civilian employees. Colonel's Matthew R. Brooks and Colin J. Connor lead the two units garrisoned at Minot."],
            ["396922049", "Rickenbacker Air National Guard Base", "rickenbacker-ang-base", "Rickenbacker Air National Guard Base is located in Columbus, Ohio, adjacent Columbus Regional Airport. It is part of the Ohio Air National Guard and home to the United States Air Force 121st Air Refueling Wing. It also serves as a base of operations for Navy and Marine reserve units. The base is named for the famous World War I flying ace and Columbus native, Eddie Rickenbacker.

The based started life in 1942 as the Northeastern Training Center of the Army Air Corps and was then renamed Lockbourne Army Air Field after the nearby village. Besides general military training, it was also the home of the 166th Tactical Fighter Squadron and the 364th Fighter Squadron, as well as several bomber units during World War II. During the Korean War the base served as the home for the 121st Fighter Wing. The base was finally designated Rickenbacker Air Base in 1974 in honor of the home-town hero. The base ceased to operate as an active-duty base in 1980 when the Strategic Air Command handed over command to the Ohio National Guard."],
            ["400122065", "Altus AFB", "altus-afb", "Situated about 4 miles east of Altus, Oklahoma, Altus Air Force Base was first established in 1943. It was briefly inactive from April 1946 to March 1953, but has been in use since it was reopened. The base is the home of the 97th Air Mobility Wing and supports around 1,800 active duty members as well as 1,000 civilians.

Altus is one of the bigger cities in the area and is the seat of Jackson County. The total population of the town was roughly 20,000 during the 2010 census. Primary schooling, child care facilities and other essential services area available on the base.

Altus AFB has been the site of advanced flight training since it was established. Currently, personnel are tasked with providing specialty training programs for C-17 and KC-135 aircrews."],
            ["404725109", "Tinker AFB", "tinker-afb", "Located in Oklahoma City, Tinker Air Force Base acts as the base of operations for the Oklahoma City Air Logistics Center, part of the Air Force Materiel Command. The 72d Air Base Wing is the primary host unit at Tinker Air Force Base, which was named after Major General Clarence L. Tinker, the first Native American to reach that rank.

Tinker Air Force Base was built in 1941, and currently houses close to 8,600 active duty personnel, and more than 11,400 family members. The base employs more than 26,000 people, making it the largest single-site employer in the state. In 1957, Buddy Holly and The Crickets records 4 songs at the base.

The United States Navy's Strategic Communications Wing One resides at Tinker, and is responsible for supporting the E-6 Mercury fleet of aircrafts. The E-6 Mercury fleet acts as a national security and nuclear deterrence fleet."],
            ["404845047", "Vance AFB", "vance-afb", "Vance Air Force Base is located in Enid, Oklahoma, 90 minutes north of Oklahoma City. Built in 1941 and activated in 1942, the base was originally named Enid Army Flying School. It was renamed in 1949 in honor of Lieutenant Colonel Leon Vance, an Oklahoma native and Medal of Honor recipient who died during World War II.

Education is the primary function of Vance Air Force Base, with the 71st Flying Training Wing operating out of the base as a part of Air Education and Training Command. Colonel Paul M. Johnson acts as the Commander of the 71st Operations Group, which overseas the 71st Flying Training Wing.

Approximately 400 students train at Vance Air Force Base at any given time, with another 800 serving as officers, enlisted personnel, and civilians. Students practice their flight landings at nearby Kegelman Air Force Auxiliary Field, located in Cherokee."],
            ["450411019", "Joint Base Charleston", "joint-base-charleston", "Located in North Charleston and Goose Creek, South Carolina, Joint Base Charleston is operated by the United States Air Force and Navy. Established in 2010, the base is composed of Charleston Air Force Base and Naval Support Activity Charleston. Commercial airlines of the Charleston International Airport and the base operate on shared runways.

Charleston Air Force Base was established in 1919. It has a history of operating alongside civilian airlines, with Delta and Eastern airlines sharing its 5,000 foot runway during World War II. The Navy Naval Support Activity was commissioned in 1941 to distribute and collect ammunition in the Second World War. 

Joint Base Charleston has a total population of nearly 100,000 people. Current tenants of Joint Base Charleston include the Navy, Air Force, Marines and Coast Guard. A major role of the joint base is Department of Defense Support."],
            ["460885103", "Ellsworth AFB", "ellsworth-afb", "Ellsworth Air Force Base is home to around 8,000 people and is located just outside Rapid City, South Dakota. It consists of just under 5,000 acres of land. Its associated training complex is the Powder River Training Complex, which was expanded to cover 28,000 square miles of airspace in 2015.

Ellsworth AFB - then known as Rapid City Army Air Base - was first acquired and constructed in 1941. It was used as a training range for B-17 Flying Fortress bombers during the second world war, and was briefly deactivated at the end of the war. It was reactivated in 1947 after receiving substantial upgrades and construction. It hosted missile silos for nuclear weapons until the 1990s.

Ellsworth currently serves as the home base of the 28th Bomb Wing, which is one of two active USAF wings flying the B-1B Lancer strategic bomber. The base is part of the USAF Global Strike Command."],
            ["470092031", "Arnold AFB", "arnold-afb", "Located near Tullahoma, Tennessee, Arnold Air Force Base is operated by the United States Air Force. The base supports air missions, despite a lack of an active airfield on site. The base has become a leader in flight simulation technology. 

Originally named Camp Forrest, then William Northern Field, the base became Arnold AFB in 1951 to commemorate the death of General Arnold, who is considered the father of the United States Air Force. The base played a significant role in the Second World War, when it hosted General Patton's division and German prisoners of war. During the Cold War, the base became a site of research and technological development. 

The Arnold Engineering Development Complex is a worldwide front-runner in flight simulations, simulating numerous conditions. Services of Arnold AFB include Arnold Lakeside Center for recreation, a golf course, outdoor recreation facilities and a credit union. Despite the lack of an active airfield, the base employs thousands of civilians and military personnel."],
            ["482017441", "Dyess AFB", "dyess-afb", "Dyess Air Force Base, located in Abilene, Texas, lies 180 miles west of Dallas. Established in 1942 as Abilene Army Airbase, it was renamed for Lt. Col William Edwin Dyess who heroically died in a plane crash, refusing to abandon his aircraft in an attempt to prevent civilian deaths.

The base hosts the 7th Bomb Wing, known as the &quot;Home of the B-1&quot;, which trains all Air Force B-1B combat crew in their mission to develop world-class Airmen and air power. Dyess is also home to an Air Combat Command Wing whose key squadron, the 317th Airlift Group, operates C-130H aircraft for military transport and supply worldwide.

4500 military members are assigned to Dyess with over 490 civilians employed on base. Located along the entrance road to the base is the Dyess Linear Air Park, a 1.2 mile-long outdoor exhibit featuring displays of over 30 historic Air Force aircraft."],
            ["482184201", "Ellington AFB", "ellington-afb", "Ellington Air Force Base, also known as Ellington Field Joint Reserve Base, is a joint base that is shared by multiple military units. It primarily serves as the home for the Texas Air National Guard's 147th Reconnaissance Wing. Ellington Air Force Base is located in southwestern Houston.

Ellington was built in 1917 and acted as a flight training base during World War I. The base was named after Lieutenant Eric Lamar Ellington, an Army pilot who perished in a plane crash several years prior. During World War II, bomber pilots ran numerous test runs and flight training missions over Ellington's field.

Ellington hosts flight operations performed by NASA, in cooperation with the nearby Johnson Space Center. Most of NASA's manned spacecrafts that are based at Johnson Space Center are currently stored and serviced at Ellington Air Force Base. The Army, Navy and Marine Corps Reserve also maintain a presence at Ellington."],
            ["482725451", "Goodfellow AFB", "goodfellow-afb", "Located in San Angelo, Texas, Goodfellow Air Force Base is part of the United States Air Force Air Education and Training Command. The 17th Training Wing garrisons at Goodfellow under the command of Colonel Michael L. Downs, and serves as a training wing for intelligence personnel as well as firefighters.

Goodfellow Air Force Base is named after 1st Lieutenant John J. Goodfellow, Jr., a World War I pilot who died during a reconnaissance mission in September of 1918. During World War II, Goodfellow produced more than 10,000 skilled, trained pilots. After the war, Goodfellow transitioned towards more intelligence and cryptology training.

As a joint service base, Goodfellow welcomes thousands of different military personnel. The base trains more than 9,000 students every year, and is also home to more than 5,000 active duty personnel and over 12,000 family members. The 17th Medical Group provides care and service to all occupants."],
            ["483595029", "Kelly Field Annex", "kelly-field-annex", "Kelly Field Annex, formerly known as Kelly Air Force Base, is a U.S. Air Force installation in San Antonio, Texas. It was established in 1917 to support the U.S. military involvement in World War I. 

Kelly Field Annex is home to two tenant commands, the Texas Air National Guard and the 433rd Airlift Wing of the Air Force Reserve Command. The annex is named after Second Lt. George Edward Maurice Kelly. 

At its peak, Kelly occupied 4,000 acres and employed nearly 30,000 people. The base was the single-largest employer in South Texas for nearly five decades. In 2001, the U.S. Government closed Kelly Air Force Base and shifted much of its operations to nearby Lackland AFB. A big part of the installation became Port San Antonio, the biggest commercial/industrial property in Bexar County."],
            ["483765029", "Lackland AFB", "lackland-afb", "San Antonio, Texas is home to the only military training camp for the United States Air Force. The installation is on four and a half miles with 110,000 transient active duty personnel, their families and civilian workers. This has been a training hub since 1941 with a joint base consolidation in 2005 with Fort Sam Houston, Camp Bullis, and Randolph AFB. 

The United States Air Force is the hosting military branch to the 502d Installation Support Group, Inter-American Air Force Academy, and Defense Language Institute. Training is the main mission of this facility that also includes military working dogs.

One concrete runaway has a length of 11,550 feet, which is used for training Air Force reservists and national guardsmen. In 1951, surveillance was added to the mission with the Joint Surveillance System designation as a radar station. Occasionally, Lackland serves as a shelter for minors of illegal immigrants."],
            ["483907465", "Laughlin AFB", "laughlin-afb", "Located just 9 miles from Mexico, Laughlin Air Force Base is the largest pilot training base in the entire Air Force. The 47th Flying Training Wing is garrisoned at Laughlin, under the command of Colonel Thomas E. Murphy. The base was built in 1943 and named after pilot Jack T. Laughlin, who was the nearby city of Del Rio's first World War II casualty.

Laughlin Air Force Base features an exhausting 52 week training course in which pilots learn to fly some of the most sophisticated aircraft in the world. Every year, approximately 400 military pilots complete the program, with the group as a whole flying over 100,000 hours during training. 

The population at Laughlin consists of 1,387 active duty Air Force personnel, along with 72 Air Force Reserve and National Guardsmen. 1,268 family members also take up residence at Laughling Air Force Base."],
            ["485635029", "Randolph AFB", "randolph-afb", "Universal City, Texas is home to Randolph Air Force Base, which serves as a flight training facility for the United States Army Air Corps. Built in 1928, the base was named after Captain William Millican Randolph, an Austin native who was killed in an AT-4 aircraft crash. In an ironic twist of fate, Randolph was a member of the committee chosen to give the base its name.

Randolph Air Force Base is the headquarters for the Air Education and Training Command's Nineteenth Air Force, under the command of Major General James B. Hecker. Randolph is a part of Joint Base San Antonio, which also includes Camp Bullis, Fort Sam Houston, and Lackland AFB.

The smallest of the four bases that make up Joint Base San Antonio, Randolph Air Force Base has a total force of just under 16,000 people. The 359th Medical Group provides care for the base."],
            ["500205007", "Burlington Air National Guard Base", "burlington-ang-base", "Loctaed in South Burlington, Vermont, Burlington Air National Guard Base has been active since February 1953, though it began to have its components put in place two years earlier. That's when the town's airport served as the home of the 134th Fighter Squadron after it had been assigned by the Air Defense Command (ADC).

For its first seven years, it operated as Ethan Allen Air Force Base. The name change coincided with the re-organization of the 134th Squadron into the 158th Fighter Interceptor Group and meant that instead of it serving as an Air Force base, it would be used by the Vermont Air National Guard.

By 1968, ADC now stood for Aerospace Defense Command, though by 1980, it had been disbanded, with the 158th working under Tactical Air Command. It remains under the control of the Air Force, though in 1992, it became part of the Air Combat Command."],
            ["511404650", "Langley AFB", "langley-afb", "Located adjacent to the cities of Hampton and Newport News in coastal Virginia, Langley Air Force Base has served the United States since 1916. The base was established prior to the United States entry into World War I, but proved invaluable as an aviation training ground for pilots joining the war effort. Langley Air Force Base was named after Samuel Pierpoint Langley, former Secretary of the Smithsonian Institution.

Langley Air Force Base was forced to join with nearby Fort Eustis in October of 2010, as part of a 2005 effort to consolidate military facilities. The 633d Air Base Wing is the primary unit garrisoned at Langley, and is under the command of Colonel Caroline M. Miller.

Due to the consolidation of Langley and Eustis, the Joint Base houses a sizable population of both military personnel and civilians. 8,000 active duty soldiers join 10,000 family members and 12,000 students at Langley."],
            ["560875021", "Warren AFB", "warren-afb", "Warren AFB, named in 1930 after Wyoming's first U.S. Senator, Francis Emroy Warren, is located outside of Cheyenne, Wyoming. The U.S. Army founded the base in 1867. The United States Air Force took it over on September 18, 1947. 

Warren AFB is an active strategic missile base, employing about 3,361 military personnel and 964 civilians. It houses the 90th Missile Wing, a part of Twentieth Air Force. The 90th Missile Wing operates 150 Minutemen III Intercontinental Ballistic Missiles (ICBMs) from the base. 

There are also fun, and educational activities run by the Mighty Ninety (another name for the 90th Missile Wing) for military personnel, civilian employees, their families and the Cheyenne, Wyoming community. For example, a Joint Services Multicultural Event was held at Warren AFB on June 22, 2016, to celebrate diversity. Also, earlier this year on April 22, there was a bubble soccer tournament."],
            ["490695011", "Hill AFB", "hill-afb", "Hill Air Force Base began as a Hill Field, after Congress appropriated $8 million for an air mail depot in Utah. During World War II, the site was used for maintenance, supplies, and storage of surplus warplanes. The location was commissioned Hill AFB in 1948.

The base is located 30 miles north of Salt Lake City. It is home to the 75th Air Base Wing, the 84th Combat Sustainment Wing, the Air Force Nuclear Weapons Center, and other maintenance and aerospace support teams. Hill AFB is also home to the Ogden Air Logistics Complex, which oversees information and material management for the maintenance of several USAF weapon systems, including the A-10 Thunderbolt II, the B-2 Spirit, and the Minuteman III. More recently, all maintenance for the F-22 Raptor was consolidated at Hill AFB.

The base employs over 21,000 active duty, reserve, and civilian personnel. It is Utah's largest single-site employer."],
            ["530705063", "Fairchild AFB", "fairchild-afb", "Fairchild Air Force Base is located about 12 miles southwest of the city of Spokane, Washington. The base opened in 1942 as the Spokane Air Depot, but was later renamed in honor of General Muir S. Fairchild, who served as the Vice Chief of Staff of the Air Force as well as a World War I pilot. 

The 92d Air Refueling Wing acts as the host unit at Fairchild, and supplies air refueling as well as airlift support. Fairchild is also home to several units of the Washington Air National Guard, including the 242d Combat Communications Squadron. Fairchild serves as one of the main refueling wings for the American west coast.

The total population of Fairchild Air Force Base exceeds 21,000 people, the large majority of them being the 16,982 retirees. 2,672 active duty personnel, 1,051 guardsmen and 486 civilians make up the rest of Fairchild's population."],
            ["012025101", "Maxwell Gunter Annex", "maxwell-gunter-annex", "Maxwell Gunter Annex is a military installation of the United States Air Force located in the suburbs northeast of Montgomery, Alabama. It opened in 1940, and the 42nd Air Base Wing at nearby Maxwell Air Force Base operates the Annex as a subordinate installation. The Annex is named after the late long-time mayor of Montgomery William Adams Gunter.

The Business and Enterprise System is headquartered at Maxwell Gunter Annex. The BES is a combat information system and network that is used by the USAF, Department of Defense, and various federal government agencies. Its primary function is to provide information technology and weapon system solutions for the Air Force.

The Montgomery Municipal Airport became Maxwell Gunter Annex's location, and the original purpose of the Annex was to be a flight training school. Currently, over 2,200 people are employed at the Annex, and they support 161 combat support, logistics and infrastructure programs."],
            ["123025005", "Tyndall AFB", "tyndall-afb", "Tyndall Air Force Base is located in the northwestern part of the Florida panhandle, about 12 miles east of Panama City. As of the 2000 census, Tyndall AFB had a population of 2,757 with 663 households; however, by the 2010 census, the population on the base rose to 2,994 individuals.

Tyndall AFB is the headquarters for the ACC (Air Combat Command) as well as the 325 Fighter Wing, the 44th Fighter Group, the 325 Fighter Wing Associate Unit, First Air Force and the 53d Weapons Evaluation Group as well as several other organizations. 

Tyndall Field was originally opened as a gunnery range on January 13, 1941 and was named after 1st Lt Frank Benjamin Tyndall, a World War I pilot. When the USAF was established in 1947, Tyndall Field was renamed to Tyndall Air Force Base. Today it is home to the F-22 Raptor, the newest aircraft of the USAF."],
            ["133745185", "Moody AFB", "moody-afb", "Moody AFB is operated by the United States Air Force and is located in Lowndes County and Lanier County, Georgia, nine miles away from Valdosta, a city prized for its legendary high school football program and its azaleas, which have earned it the nickname &quot;Azalea City.&quot;

Moody AFB, which was built in 1941 and has been in continual use ever since, is home to the 23d Wing, which performs close air support, force protection, and combat search and rescue operations around the world. The base has played a role in supporting the work of stabilizing the Afghan Air Force additionally.

The 23d Wing is made up of about 6,100 military and civilian personnel. Only a little less than 900 people actually live on the base, which is close to many sights and comforts in Georgia. Located at Moody AFB is a Embry-Riddle Aeronautical University-Worldwide campus."],
            ["134715153", "Robins AFB", "robins-afb", "Robins AFB is operated by the United States Air Force and is a major installation. Located in Houston County, Georgia, the base is about 100 miles away from Atlanta. Robins AFB was built in 1942 and has been in continual use ever since. Robins AFB is quite large, with a base population of around 40,000 people.

Robins AFB is home to the Air Force Material Command's Warner Robins Air Logistics Center, an important organization of the Armed Forces as it serves as the worldwide facility for a wide array of different aircraft, engines, missiles, software, and avionics as well as accessories and various components. 

Robins AFB, one of only three Air Force Air Logistics Centers in the nation, is home to the Museum of Aviation which itself houses the Georgia Aviation Hall of Fame. The Museum attracts more than 500,000 visitors every year."],
            ["177835163", "Scott AFB", "scott-afb", "Located 30 minutes east of St. Louis in southeastern Illinois, Scott Air Force Base was built in 1917 and currently houses the United States Transportation Command as well as the U.S. Army Surface Deployment and Distribution Command. The 375th Airlift Wing, led by Colonel Laura L. Lenderman, is currently garrisoned at the Base.

Scott AFB is home to approximately 4,668 active duty servicemen and woman, as well as an additional 2,267 members of the Air National Guard. The base was named after Corporal Frank S. Scott, who was the first enlisted member of the United States Air Force to die in an aircraft accident back in 1912.

The airfield at Scott Air Force Base is known as MidAmerica St. Louis Airport, and services both military and civilian flights. Over the last couple of years, Scott AFB has been the beneficiary of over $16 million in infrastructure improvements."],
            ["220115015", "Barksdale AFB", "barksdale-afb", "Barksdale AFB is operated by the United States Air Force and is located in Bossier Parish in northwest Louisiana, which is located near Shreveport. The base was built in 1931 and has more or less been in continual use ever since. 

Barksdale AFB covers over 22,000 acres of land, and more than 15,000 active-duty personnel, Reservists, and civilians work there. The area is amenable and close to sites off-base in the community and surrounding cities.

Around 40 B-52 Stratofortress aircraft are assigned to the base's host unit, the 2d Bomb Wing. The 2d Bomb Wing trains all Air Force Global Strike Command and Air Force Reserve Command Boeing B-52 Stratofortress aircraft crew. The 2d Bomb Wing is also responsible for providing global combat capability when needed."],
            ["280545087", "Columbus AFB", "columbus-afb", "Columbus AFB is operated by the United States Air Force and is located nine miles north of Columbus, Mississippi, which is about 60 miles south of Tupelo. The base was built in 194 1and has been in continual use ever since.

Hundreds of employees work at the base, including 900 personnel who are highly skilled and capable of deploying immediately to support various contingencies around the world. Columbus AFB has been training pilots since World War II. Though the base was closed after the war and through 1951, it has put such a focus on training pilots that about half the pilots in the Air Force currently went through basic training and primary flight training at Columbus AFB.

The host unit at Columbus AFB is the 14th Flying Training Wing, which is assigned to the Air Education and Training Command."],
            ["313595153", "Offutt AFB", "offutt-afb", "Offutt Air Force Base in Omaha, Nebraska, is one of the most important Air Force Installations in the USA. This base's long history began in 1890 when the U.S. War Department commissioned what was then known as Fort Crook. This fort was founded to train and send dispatches against Indian fighters. In the 1920s, Fort Crook officially became Offutt Base as military workers both prepared a 260-acre airfield and created the site's first aircraft hangars.

Some of the most important events that took place at Offutt Base include the Glen L. Martin Bomber Plant, which developed and sent out the atomic bombs on Hiroshima and Nagasaki, and President George W. Bush's first strategic meeting after the terrorist attacks on 9/11. 

Today, Offutt Base is estimated to house over 8,500 people. It is home to both the United States Strategic Command and the Air Force Weather Agency. The 55th Wing is the major garrison at Offutt Base, which has the great distinction of being the largest group within Air Combat Command."],
            ["452365085", "Shaw AFB", "shaw-afb", "Shaw Air Force Base is located 36 miles east of Columbia in South Carolina. The base was originally named Shaw Field, and built in 1941 as a response to World War I. It's named after 1st Lieutenant Ervin David Shaw, a World War I pilot who was one of the first to fly combat missions during the war.

The United States Air Force Air Combat Command has jurisdiction over Shaw Air Force Base. Garrisoned at the base is the 20th Fighter Wing, which specializes in providing suppression of enemy air defenses. The 20th Fighter Wing is the Air Force's largest F-16 combat wing. Shaw also serves as the headquarters for the Ninth Air Force.

5,437 active duty military personnel are stationed at Shaw Air Force Base, as well as nearly 11,000 family members and 600 civilians. Shaw is one of only two Air Force bases with an active railroad line."],
            ["486345485", "Sheppard AFB", "sheppard-afb", "Sheppard Air Force Base is under the jurisdiction of the United States Air Force. It is located around five miles from Wichita Falls, Texas, and is the largest training base within the Air Education and Training Command. It consists of roughly 6,000 acres of land and has a population of around 30,000 people.

The base - then just 300 acres - was opened in late 1941 under the U.S. Army Air Corps as a training center. Basic training was carried out on the site throughout the Second World War, and it rapidly expanded during that period. Its population peaked at the end of the war, as it served as a separation center for troops being discharged.

Today, Sheppard is home to various USAF training programs, including the Euro-NATO Joint Jet Pilot Training Program. Its primary unit is the 80th Flying Training Wing. It conducts training of both pilots and support personnel."],
            ["020655090", "Eielson AFB", "eielson-afb", "Situated on the banks of the Tanana River in central Alaska, Eielson Air Force Base has been a designated Superfund site since November of 1989. The base was named in honor of Carl Ben Eielson, a pilot who served in the U.S. Army Air Service in 1917.

Eielson Air Force Base was constructed in 1941, and the base saw usage during both World War II as well as throughout the Cold War. During the 1960's, the base was used as a deployment center for interceptors being used by Air Defense Command. Eielson was also home to the 6th Strategic Wing, which operated recon missions out of the base.

The 354th Fighter Wing, under the command of Chief Master Sergeant Brent S. Sheehan currently resides at Eielson. Approximately 6,000 people currently reside within the confines of Eielson Air Force Base."],
            ["121865057", "MacDill AFB", "macdill-afb", "MacDill AFB is located a few miles south of Tampa, Florida. The base was built and established in 1939 with the base's completion coming in 1941 and housed several air and bombardment units over the course of the Second World War.

MacDill AFB, as the name would imply, is run by the United States Air Force and at the moment, hosts 2,692 people living in the immediate area.

This facility is responsible for being the garrison for multiple known wings and divisions, most notably the 6th Air Mobility Wing. The first flying operations began in 1941 and charged with defending the Tampa Bay area. The base also held Strategic Air Commands and Bombardment units over this course of time and was a source of deployment during World War II and over the course of the Cold War."],
            ["203379173", "McConnell AFB", "mcconnell-afb", "McConnell AFB is operated by the United States Air Force and is located just four miles away from the central business district of Wichita in southeastern Kansas. McConnell was built in 1941 and has been in continual use ever since. 

The host unit to McConnell AFB is the 22d Air Refueling Wing, which refuels various aircraft and provides other support services. It is also home to the Air Force Reserve Command's 931st Air Refueling Group and the Kansas Air National Guard's 184th Intelligence Wing.

McConnell has a rich history of aviation and also of interaction with the civilian community, having built B-29 Superfortress aircraft in the 1940s. It is also known as the home of the Kansas Aviation Museum, which was formerly the Wichita Municipal Airport."],
            ["399165057", "Wright-Patterson AFB", "wright-patterson-afb", "Wright-Patterson Air Force Base is operated by the United States Air Force and is located in Ohio, roughly ten miles from Dayton. It currently employs around 27,000 people, including both military and civilian personnel. It is one of the largest bases operated by the USAF and counts as a city in its own right.

Wright-Patterson AFB began as the test site used by Orville and Wilbur Wright for the Wright Flyer in 1904. The area developed into two separate airfields, Wright and Patterson, which were acquired by the military and fused into a single base in 1948. The base served as the site of negotiations to bring an end to the Bosnian conflict.

The base currently hosts the 88th Air Base Wing and a number of highly significant USAF operations, such as the AF Materiel Command, AF Life Cycle Management Center, AF Research Lab, the AF Institute of Technology, and the National Air and Space Intelligence Center."],
            ["080389041", "Cheyenne Mountain AFB", "cheyenne-mountain-afb", "Cheyenne Mountain Air Force Station, formerly known as the Cheyenne Mountain Complex located at 101 Norad Rd, Colorado Springs, CO 80906 was built in the 60s as a Cold War defensive strategy. The Bunker is built to deflect a 30 megaton nuclear explosion. Cheyenne Mountain Complex originally housed the United States Space Command an the North American Air Defense Command (NORAD). The mountain is also the site of the Cheyenne Mountain Zoo and Will Rogers Shrine of the Sun. It has been featured in movies such as War Games, the Terminator series, and Independence Day. It also served as the primary command centers in television shows Stargate SG-1 and Jeremiah

Construction of the complex, by the Utah construction & Mining Company, began on May 18, 1961 under the supervision of the Army Corps of Engineers. The NORAD Combat Operations Center was fully operation by April 20, 1966. Over the years, many units of NORAD, U.S. Space Command, Aerospace Defense Command (ADCOM), Air Force Systems Command, Air Weather Service, and Federal Emergency Management (FEMA) have all operated out of the complex. In 2006 the complex was de-commissioned as a defense headquarters as the threat of nuclear war was deemed unlikely. NORAD's command operations center was moved to Peterson AFB, which is also home to U.S. Northern Command. 

Cheyenne Mountain is still open for business, however, and Denver's ABC News 7 was recently granted a tour. News 7 reports that because the complex is still considered NORAD and USNORTHCOM's Alternate Command Center. Cheyenn Mountain's deputy director, Stevon Rose, told News 7 that there are still more than a dozen government and DOD agencies operating out of the mountain, employing around 350 people during the weekdays and around 120 to 130 during nights and weekends. In 2015 NORAD contracted with Raytheon to move their communications systems into the complex to shield them from Electromagnetic pulse attack, as the mountain is also EMP-hardened."],
            ["062075065", "March Air Reserve Base", "march-arb", "March Air Reserve Base is a base of the United States Air Force and is located in Riverside County, California in the southern part of the state. The 2010 Census showed that March ARB has a population of about 1,150 people.

March ARB is home to the Fourth Air Force, a major component of the Air Force Reserves, and is also home to the largest air mobility wing in the entire Fourth Air Force as well. In addition to being a base of the United States Air Force, March ARB is also home to units from the Reserves of the Army, Navy, and Marine Corps as well as the California Air National Guard and the California Army National Guard.

Though it has a strong history as a Strategic Air Command during the Cold War, March ARB continues to grow as a modern base in a beautiful part of southern California."],
            ["052321119", "Little Rock AFB", "little-rock-afb", "Located approximately 17 miles northeast of Little Rock, Arkansas, the Little Rock Airforce Base is the primary C-130 Hercules training center for every branch of the US military. This base was authorized by the government in 1953, and opened January 24th, 1955. 

The Air Force's 19th Airlift Wing, which provides the DoD with the largest C-130 Hercules transport fleet known globally, is the host unit at Little Rock AFB. They airdrop troops and supplies into the heart of operations taking place in hostile territory, as well as providing airlift humanitarian aid to victims of acute disasters.

As the fourth-largest employer in Arkansas, the hiring atmosphere on Little Rock AFB is high. A report in 2014 declared unemployment percentages in the area down to 4.9%, lower than the national average. According to this same report, this base is estimated to have an economic impact of more than $813 million per year."],
            ["251445013", "Westover Air Reserve Base", "westover-arb", "Westover Air Reserve Base, located between the cities of Chicopee and Ludlow near Springfield, Massachusetts, is the world's largest Air Reserve Base by area. Operated by the Air Force Reserve Command, the base was constructed in conjunction with the United States' preparations for World War II. 

Today, the base's host unit is the 439th Airlift Wing. Westover has previously been the home to, among others, the 499th Air Refueling Wing and the 99th Bombardment Wing. These units were part of the military's planning for nuclear war; during the Cold War, a Strategic Air Command bunker was built in the area. 

Unlike some bases, Base Realignment and Closure, commonly known as BRAC, was helpful for Westover Air Reserve Base. It is now one of the few remaining military air bases in the Northeast United States and, as such, has a large positive impact on the economy in the Springfield area."],
            ["GQ0200000", "Andersen AFB", "andersen-afb", "Andersen AFB is operated by the United States Air Force near Agafo Gumas in Guam. The base is jointly commanded with the Naval Base in Guam. Andersen AFB is one of only four bomber forward operating locations in the United States Air Force, and provides forward support to bomber crews deploying to Europe and also to Southwest Asia and the Pacific.

The 36th Wing, host to Andersen AFB, is a non-flying wing whose mission is largely to provide support to air and space forces deployed in the region. It also supports tenant units assigned to the base.

The base, however small, is critical in the Asia-Pacific region. Its position in Guam, which is relatively close to a naval bombing range and whose airspace is almost completely unrestricted, makes it ideal for training."],
            ["RQ0155000", "Borinquen Air Station", "borinquen-air-station", "The United States Coast Guard Air Station Borinquen was established in July of 1976 after the United States Air Force ceased operations at Ramey AFB. The base was taken over by the United States Navy but was vacated, which is when the Coast Guard took over operations. 

The United States Coast Guard Air Station Borinquen operates under Commander, Coast Guard Sector San Juan, Puerto Rico. The primary operation of Borinquen Air Station consists of search and rescue missions. There are are also secondary mission operations, which include aerial support for ATON, logistic support, and law enforcement. Furthermore, the Coast Guard Air Station Borinquen supports the United States Coast Guards vessels. Other United States Department of Homeland Security agencies, which include the United States Border Patrol Ramey Sector, also receive support from Borinquen. 

The United States Coast Guard Air Station Borinquen has an estimated population of 355. The population includes 150 civilians, 170 enlisted personnel, and 35 officers. The base includes a Coast Guard housing area, a United States recruiting office, guest facilities, a child development center, a park, and a child development center."],
            ["050648119", "Camp J.T. Robinson", "camp-jt-robinson", "Camp Joseph T. Robinson is a camp of the Army National Guard, and is located in North Little Rock, Arkansas. It is home to the Arkansas National Guard, but is used by other military and civilian organizations as well. The area encompasses 33,000 areas and is instrumental as a training facility for the military.

The land for the camp was awarded in 1917. During World War II, Camp Robinson served as housing for German prisoners of war, and was Arkansas's second largest city when control was turned over to the State of Arkansas in 1946. Most recently, substantial acreage at the Camp was designated for use as a National Cemetery.

An example of beneficial partnerships between the military and civilian sector, Camp Robinson has existed in parts as a wildlife management areas and even an airport servicing North Little Rock."],
            ["060543073", "Camp Pendleton", "camp-pendleton", "Camp Pendleton is operated by the U.S. Marine Corps and is located in San Diego. It is an important base of the Marine Corps. Camp Pendleton was built in March 1942 and has been in use ever since September 1942. 

Camp Pendleton was established to train Marines for service in World War II and became a permanent installation in 1946. It is home to many Operating Force units, but is perhaps best known as the home of the I Marine Expeditionary Force, which is the largest unit of its kind in the Fleet Marine Force and is nicknamed the &quot;Warfighting MEF&quot; for its consistent contribution to armed conflicts.

Built on pristine land and still not far from the haunts of Southern California, the base even includes breeding habitat for different animals as well as habitat for rare mammals and specimens as well as non-native bison."],
            ["060545053", "Camp Roberts", "camp-roberts", "Camp Roberts is a post of the California National Guard located on either side of the Salinas River in Monterey and San Luis Obispo counties. The post is run by the California Army National Guard and is named after a World War I Medal of Honor recipient.

Camp Roberts is important in many respects as a training ground for units from outside of the area. In fact, in addition to hosting annual trainings for nearly all California Army National Guard units, it also has a history of being used by the British Army.

The post is undergoing major renovations to remove infested, hazardous barracks from the World War II-era. Those renovations, which were started in 2012, necessitated the construction of a substantial landfill in the area. However, the areas is still beautiful and suit for personnel."],
            ["060546079", "Camp San Luis Obispo", "camp-san-luis-obispo", "Camp San Luis Obispo is an operational military base in San Luis Obispo County, California first established in 1928, which increased its size during World War II from 6274 acres to its current size of 15244 acres. 

Though the base is the original home of the National Guard, during World War II it was used as a prisoner of war camp, and the United States Army used Camp San Luis Obispo during the Korean War for signal training, including teletype and cryptography training. From 1965-1978, the base hosted Cuesta College's campus.

Today, Camp San Luis Obispo is home to many branches of the military, including units of the state Army and Air National Guard, the California Conservation Corps, and the U.S. Army and Coast Guard Reserves. Their administrative housing can accommodate 1520 workers and up to 2000 soldiers for training exercises, which is currently the facility's main focus."],
            ["060561001", "Camp Parks", "camp-parks", "Parks Reserve Forces Training Area, known as Camp Parks, is a United States Army facility located 25 miles away from Oakland in Dublin, California, the second fastest growing city in California. The facility was built in 1943 and has been in use ever since. 

Currently, the facility's purpose is to serve as a semi-active mobilization and training center for Reserve personnel to be used in case of national emergency or need such as war or natural disaster. Camp Parks is actually the only local training facility for more than 11,000 Reservists in the San Francisco Bay area.

The base was historically used by troops coming home from the Pacific Theater who needed medical treatment, military training, and other organizational support. However, the area has not been in constant use by the military, having been given to local governments at times for use as a jail."],
            ["120432019", "Camp Blanding", "camp-blanding", "Camp Blanding Joint Training Center, located in Clay County and near Starke, Florida, serves as a training base and primary military reservation for the Florida Army National Guard and the Florida Air National Guard. Camp Blanding is also a training center for Army and Naval ROTC units. Camp Blanding enjoys a rich history of continuous use since its erection in 1940.

The camp's location is thanks to the United States Navy, which scouted the site and initially utilized it as a Naval Air Station for its prized nearness to the banks of the St. John's River, Jacksonville. The National Guard took over the location in 1939 and recommended its namesake, Lieutenant General Alfred H. Blanding, who commanded the 2nd Florida Infantry in the Mexican Border Service from 1916 to 1917.

Camp Blanding was as an active duty training center for the United States Army during World War II. The camp also housed German POWs and was a temporary holding center for Italian, Japanese and German immigrants. Official resources don't supply Camp Blanding's current population, but nearby Starke has a population of about 5,500."],
            ["220315079", "Camp Beauregard", "camp-beauregard", "Camp Beauregard is controlled by the United States Army and is located primarily in Rapides Parish, Louisiana. It is operated by the Louisiana National Guard and serves as one of their main training areas.

The base has its beginning in 1917 when the then-War Department green lighted the construction of around thirty camps in order to train troops for World War I. Camp Beauregard served as training grounds for many troops, and was again repurposed for this in 1940 to train troops for World War II. Training exercises in the area that prepared almost 500,000 men for battle in World War II included Camp Beauregard. 

In 1993, Camp Beauregard became Louisiana's first National Guard Youth Challenge Program site. Over 8,100 candidates have graduated from this program in the 23 years since."],
            ["250172001", "Camp Edwards", "camp-edwards", "Camp Edwards is operated by the Massachusetts National Guard and is located in western Barnstable County, which includes Cape Cod and is close to Nantucket. Camp Edwards was built by the United States Army in 1911 and has been used ever since, especially in both World Wars and the Cold War.

Camp Edwards is the largest component of Joint Base Cape Cod, which includes Otis Air National Guard Base and Coast Guard Air Station Cape Cod. Joint Base Cape Cod then encompasses 22,000 acres of land, of which Camp Edwards takes up 15,000.

Camp Edwards has enough housing for 2,500 service members and is an important training center for soldiers from New England as well as for civilians involved as first responders and law enforcement. It is the largest training area in the Northeastern United States."],
            ["280395035", "Camp Shelby", "camp-shelby", "Located near Hattiesburg, Mississippi, Camp Shelby is the largest training site of its kind in the United States. The post is home to National Guard and Reserves Annual Training for units from Mississippi, Alabama and Tennessee. The M1 Abrams Tank, Bradley Infantry Fighting Vehicles and 177th Armored Brigade use Camp Shelby as a training ground. 

Camp Shelby was established in 1917 to mobilize troops for World War I. Camp Shelby was once home to the historic Japanese-American 442nd Regimental Combat Team, the 100th Battalion and the Women's Army Corp. It once housed a rehabilitative hospital and prisoner-of-war camp for Germans in World War II. 

Serving over 100,000 personnel every year, the base trains reserve and active duty military personnel. The post's mission is to mobilize forces in wartime. The post is home to 350 active duty, 525 family members, 800 guard, 20 reserve and 300 civilians."],
            ["370735133", "Camp Lejeune", "camp-lejeune", "Jacksonville, North Carolina, is home to the east coast command of the United States Marine Corps. It has over 245 square miles of land including 14 miles that runs along the Atlantic Ocean. This facility was created during the early 1940s with six supporting satellite bases including the Marine Corps Air Station New River. 

The United States Marine Corps is responsible for daily operations of Camp Lejeune with almost two dozen divisions including the II Marine Expeditionary Force. Additional tenant units include a Navy hospital command, engineering school, Intelligence Battalion, and a Special Operations Command. This installation has its own school system, housing department, and commissary. 

As one of three training camps, over 170,000 military, families, and civilian personnel live and work here. Its world-renowned training facilities assist forces from other nations. From its position, combat ready troops and equipment are launched from stations in Wilmington to the south or Morehead City in the north."],
            ["481112453", "Camp Mabry", "camp-mabry", "Camp Mabry is located in Austin, Texas, adjacent to the Mopac Expressway's west side. It's named for Brigadier General Woodford Mabry, was the Texas Adjutant General when it was established in 1892. Having been donated by Austin to the state of Texas, its original 85 acres have nearly quintupled since that time.

The camp serves as the home of the Texas Military Forces, which consists of both the state Army and Air National Guard and the state's branch of the National Guard. In its earliest years, it was used to help mobilize troops during the 1898 Spanish-American War. 

That rich legacy is one reason why it's listed on the National Register of Historic Places. One indication of just how long the facility has been in operation can be seen in the simple fact that it stands behind only Fort Bliss and Fort Sam Houston as the state's oldest military facility."],
            ["510397095", "Camp Peary", "camp-peary", "Camp Peary, located near Williamsburg, Virginia, was founded in 1942 by the U.S. Navy as a training center for the Seabees. Now officially known as a Department of Defense facility, the Armed Forces Experimental Training Activity, it hosts what is commonly known as &quot;The Farm,&quot; a CIA training base for clandestine officers. The federal government has never officially acknowledged the existence of the facility.

The military installation, which spans about 9,000 acres, was used as a stockade later in World War II for German prisoners of war who were submariners or members of ships' crews. For security reasons, the POWs' survival was kept secret from the German government.

After the war, the area was maintained by the state of Virginia as a game preserve until 1951, when the federal government returned to the site."],
            ["550847057", "Camp Williams", "camp-williams", "Located in Orange, Wisconsin, near Camp Douglas, Camp Williams is a part of Volk Field Air National Guard Base. Camp Williams is operated by the Wisconsin National Guard. Its mission is to provide training for units to achieve combat readiness. 

Established in 1903, Camp Williams was named for Lieutenant Colonel Charles R. Williams who managed the post until his death. An airstrip was built on the location in 1936. It became a permanent training site in 1957 and maintains its historic mission of training combat-ready troops. 

The Property and Fiscal Office for the State of Wisconsin is also located in Camp Williams. The Combined Maintenance Shop maintains National Guard vehicles from armories such as Fort McCoy. The site boasts numerous historic landmarks and a National Guard Museum."],
            ["191202153", "Camp Dodge", "camp-dodge", "Located in Johnston, Iowa, Camp Dodge is the headquarters of the Iowa National Guard. It is Iowa's only military training facility. It is home to the 34th Army Band and the Gold Star Museum. 

Established in 1917, Camp Dodge is named for the general responsible for Iowa's first National Guard unit. Camp Dodge began as a processing center for draftees to whom it provided basic training. Since the end of World War II, Camp Dodge has been used exclusively as a training center for the Iowa National Guard. 

Camp Dodge operates the Sustainment Training Center, Joint Force Headquarters and Iowa's emergency operations center, along with the State Police academy. It offers numerous services to its population, such as sexual assault prevention, a behavioral health center, youth programs and family readiness."],
            ["271035097", "Camp Ripley", "camp-ripley", "Located in the Little Falls community of central Minnesota, Camp Ripley has served as a Minnesota National Guard and military training site since its opening in 1931. Situated on 53,000 acres of land, the Camp gets its name from the former Fort Ripley, as well as its namesake Eleazar Wheelock Ripley, a Brigadier General who fought in the War of 1812.

The Minnesota National Guard uses Camp Ripley to train year round, although it isn't the only agency to use the services of the Camp. The Minnesota Department of Transportation and the Minnesota State Patrol also use Camp Ripley for various training exercises.

Camp Ripley is also the home of the Minnesota Military Museum, which was opened in 1977 and boasts an impressive collection of more than 35,000 artifacts. The wildlife throughout the grounds of the Camp require that each year, 3 deer hunts are held on the ground."],
            ["360816119", "Camp Smith", "camp-smith"],
            ["391283123", "Camp Perry", "camp-perry", "Camp Perry resides on the southwest shores of Lake Erie, and has been in operation since 1909. Originally constructed as a competition ground for the National Matches rifle marksmanship contests, this northern Ohio camp saw its first military action as a training ground for Army officers during World War I.

Given its history as a shooting range, it should be no surprise that Camp Perry is home to the worlds largest outdoor shooting range. The Small Arms Firing School located at Camp Perry trains over a thousand people per year, and is run by the U.S. Army Marksmanship Unit.

Camp Perry was named after Commodore Oliver Hazard Perry, a celebrated naval commander who served during the War of 1812. Current units garrisoned at Camp Perry include the 213th Ordinance Company, 372d Missile Maintenance Company, as well as members of the Ohio Naval Militia and Ohio Military Reserve."],
            ["150310003", "Camp H.M. Smith", "camp-hm-smith", "Camp H. M. Smith is located on the Hawaiian island Oahu in a small town named Aiea. This camp is currently an installation for the U.S. Marine Corps, but that wasn't always the case. In fact, this camp began as a Navy Hospital in 1941. The U.S. Congress bought over 200 acres of a sugar cane field for $912,000 to construct this hospital. The work on this hospital did not really get going until after the attack on Pearl Harbor.

This camp, formerly called the Aiea Naval Hospital, served thousands of sailors and soldiers, especially after the battles in the Pacific Theatre of World War II. It was not until 1955 that the Marine Corps took over this site for their Fleet Marine Force Pacific.

Today, Camp H. M. Smith proper is over 220 acres and serves as the U.S. Pacific Fleet, Commander in Chief. The U.S. Pacific Command is the oldest unified combatant command center in the United States. It focuses on different military operations in the Indo-Asia-Pacific region."],
            ["062861073", "Naval Base Point Loma", "naval-base-point-loma", "Located in San Diego, California, Naval Base Point Loma is operated by the United States Navy. The base houses a Naval Mine, Submarine Base, Fleet Combat Training Center and Space and Naval Warfare Systems Command. As such, the base is a forerunner in naval research and technology.

The site of Naval Base Point Loma fell under the jurisdiction of the United States Navy in 1959. Its primary function was to serve as a center for training and housing submarine fleets. The site was not designated Naval Base Point Loma until 1998, when seven military installations consolidated to form the naval base. 

Naval Base Point Lima is considered one of the most diverse naval bases in the country. The population of the base is composed of 22,000 military and civilian employees, primarily engaged in technological pursuits. The base still fulfills its historic responsibility, housing a Submarine Base and Anti-Submarine Warfare Command."],
            ["010101015", "Anniston Army Depot", "anniston-army-depot", "A major Army facility, located in Bynum, Alabama, USA, Anniston Army Depot, aka ANAD, produces and repairs vehicles designed for ground combat. This facility is also known for overhauling Small Arms Weapons Systems. Moreover, this U.S. Army location houses chemical weapons referred to as Anniston Chemical Activity.

Covering 25-square miles of Calhoun County, Anniston Army Depot employs over 3,400 civilians who test and repair tanks and other various equipment. Probably the most notable service the facility provided in history dates back to WWII when it became a storage hub for munitions as well as rockets, projectiles, bombs, and landmines comprising VX nerve agent, Sarin, and possibly mustard gas.

The ANAD provides housing for and service on infantry weapons including the Beretta M9 pistol, M16 rifle, and even the M2 machine gun. All firearm considered inefficient or out-of-date is disposed of on the property, while all components are made unusable and sold for scrap."],
            ["424405055", "Letterkenny Army Depot", "letterkenny-army-depot", "The Letterkenny Army Depot in Pennsylvania serves U.S. soldiers worldwide by maintaining, modifying and repairing tactical weapons systems, including the Patriot missile. It was established in 1942 as one of 12 new ordnance depots needed because of the outbreak of World War II.

Letterkenny's largest period of growth was the Korean War era, when 6,500 people were employed there, and it was designated a permanent military base in 1954. The depot, located northeast of Chambersburg, is the largest employer in Franklin County, contributing about a quarter billion dollars in salaries and contract to that area's economy.

The installation's workforce consists of more than 3,600 Army personnel, civilian workers and contractors. Located on about 18,000 acres, the depot is a component of the U.S. Army and Missile Command."],
            ["485680037", "Red River Army Depot", "red-river-army-depot", "The Red River Army Depot is located in Boowie County Texas, just 18 miles west of Texarkana. Built in 1941 for the purpose of ammunition storage during World War I, this facility encompasses over 3,000,000 square feet. This space is now used for housing Army vehicles that are undergoing maintenance or repair. 

The main function of the Red River Army Depot is performing maintenance and repairs on Army vehicles. Staff at The Red River Amry Depot maintain and repair all Tactical Wheeled Vehicles, including MRAPs and HUMVEEs, for the United States Army. 

Twice this facility was slated for closure by the 1995 Base Realignment and Closure Commission and the 2005 BRCC. However, the facility remains open to this day and has received CITE Designation by the Department of Defense."],
            ["491941045", "Tooele Army Depot", "tooele-army-depot", "The Tooele Army Depot (TEAD) is where training ammunition is held for the United States Army and is named for its location in Tooele County, Utah. Among the capabilities of its primarily-civilian workforce is to test explosives, offer logistical support, provide repairs and assembly. 

While that workforce has few members of the U.S. Army among it, the commander is a full colonel in the service. The Depot is situated on more than 23,000 acres and has the capacity to store items on nearly 2.5 million square feet of land.

While TEAD was established in 1942 to handle war supplies and construction of facilities were completed the following year, it wasn't until 1962 that it earned the name it uses today. A change in the Depot's overall operations in 1993 eliminated missions that focused on storage, maintenance, distribution and troop support. That specific shift took place over the next two years."],
            ["061595035", "Sierra Army Depot", "sierra-army-depot", "Located on 36,000 acres of desert terrain in Herlong, California and operated by the United States Army, Sierra Army Depot is an Army post and ammunition storage facility. In addition to substantial space, the area is also an ideal place for material storage due to the dry climate and inland location.

The Depot's staff consists of machinists, craftsmen, equipment operators and support personnel that are responsible for the storage, maintenance, repair, and shipping of military materials.

Sierra Army Depot was established in during World War II in 1942 to provide storage for general U.S. Military supplies and Treasury department materials.

On base, there are 165 housing units, three schools, a credit union, barbershop, chapel, and theater, as well as Honey Lake. The Depot employs approximately 570 people."],
            ["011225015", "Fort McClellan", "fort-mcclellan", "Fort McClellan was formerly a United States Army post located adjacent to the Alabama city of Anniston. Since shutting down in 1999, the site has been used as part of the Mountain Longleaf National Widelife Refuge.

The fort was named in honor of Major General George B. McClellan, a former General-in-Chief of the United States Army, as well as a former Governor of New Jersey. The fort flourished during World War II, as one of the countries largest Army installations. Fort McClellan was one of the few Army posts that trained soldiers in chemical warfare.

Fort McClellan typical housed around 10,000 people, while employing about 1,500 civilians. Even though the fort has been closed, portions of the site continue to be used by the Alabama National Guard for the purposes of field training exercises, as well as the Department of Homeland Security's Center for Domestic Preparedness."],
            ["011235031", "Fort Rucker", "fort-rucker", "Located 20 minutes east of the city of Enterprise in southeastern Alabama, Fort Rucker gets its name from Civil War Confederate General Edmund Rucker. The base acts as the home of the United States Army Aviation Center of Excellence. Formerly open to the public, the base is now strictly off limits to civilians.

Built in May of 1942, Fort Rucker is occupied by the 1st Aviation Brigade, as well as the 110th Aviation Brigade, which handles flight training at the USAACE. It is also the home to the United States Army Aviation Museum, as well as the Warrant Officer Candidate School and the Warrant Officer Career College.

The base housed 4,636 people as of the 2010 U.S. Census, and was once home to former Major League Baseball players Rusty Greer and Hal Morris. Fort Rucker is currently under the command of Major General William Gayler."],
            ["020795240", "Fort Greely", "fort-greely", "Fort Greely was built to handle the extreme cold that comes with the climate; located in central Alaska, Fort Greely lies approximately 100 miles to the southeast of Fairbanks. Established in 1942, Fort Greely serves as a United States Army launch site for anti-ballistic missiles.

Named after Medal of Honor recipient Major General Adolphus Greely, the fort currently boasts 60 interceptor missiles, and is one of just two sites in the country to house such missiles. Lieutenant Colonel Detrice Mosby currently serves as post commander, and the base is home to tenants such as the 49th Missile Defense Battalion and the 59th Signal Battalion.

During World War II, the United States supplied aid to Russia by sending it through Fort Greely and into eastern Russia. Ever since, Fort Greely has served as a crucial cog in the defense of the United States from attacks emanating from west of the Pacific."],
            ["020801090", "Fort Wainwright", "fort-wainwright", "Established by the U.S. Army Air Corps in 1939 as Ladd Field, Fort Wainwright was taken over by the newly founded Air Force in 1947. The Fort Wainwright military installation is located in the Tanana River Valley of Alaska's Interior Region close to Fairbanks. The Chena River runs through the fort. 

Close to 15,000 people live and work at Fort Wainwright. Since the late 1970s, the fort has participated in the Department of Defense's Installation Restoration Program. The primary focus of the fort's involvement in this program has been to investigate and address contamination in the area. Fort Wainwright has been described as a notable national asset with superior training capabilities.

Fort Wainwright is home to America's Arctic Warriors. Soliders at the fort work and train in temperatures as cold as -50 degrees Fahrenheit in the winter and as warm as 80 degrees in the summer months."],
            ["040185003", "Fort Huachuca", "fort-huachuca", "Fort Huachuca is a United States Army operation located out of Sierra Vista, Arizona, in the southeastern part of the state. There are about 18,900 people located at Fort Huachuca, including 6,500 active duty soldiers, 7,400 family members, and 5,000 civilian employees who support the work of the military.

Fort Huachuca is home to the United States Army Intelligence Center and the United States Army Network Enterprise Technology Command (NETCOM)/9th Army Signal Command. Interestingly enough, Fort Huachuca is also the home base of the Army Military Affiliate Radio Systems (MARS), the Joint Interoperability Test Command (JITC), and the Electronic Proving Ground (EPG).

The base was originally created to secure the border with Mexico, and has a rich history of engagement with the civilian government in Arizona. It also hosts two museums and a gift shop as well as other sights."],
            ["051369047", "Fort Chaffee", "fort-chaffee", "Fort Chaffee Maneuver Training Center was first established in 1941 for the Army National Guard. It is located in the state of Arkansas near the city of Fort Smith. Fort Smith is actually on the borderline with Oklahoma. This fort was founded to help increase the size of the United States Army in preparation for World War II. The government payed $1.35 million to local residents for the 15,163 acres of the fort. 

This fort was named after Major General Adna R. Chaffee Jr. He played a crucial role in World War I when he advocated for cavalry officers to start using tanks. Since then, he has been dubbed the &quot;Father of the Armored Force.&quot;

Many music fans may know Fort Chaffee from Elvis Presley's short stay here. That's right, it was at Fort Chaffee that Elvis got his first military haircut in the famous Building 803."],
            ["061325053", "Fort Hunter Liggett", "fort-hunter-liggett", "Fort Hunter Liggett is a United States Army fort located along the California coast, roughly in between San Francisco and Los Angeles in southern Monterrey County. The fort is primarily a training station, with a special focus on exercises important for infantry divisions. 

The fort is named after General Hunter Liggett, a veteran of the Spanish-American War and World War I. Fort Hunter Liggett was created in 1940, as part of America's preparations for World War II, on land purchased from newspaper magnate William Randolph Hearst. In total, the fort covers 167,000 acres, making it the largest United States Army Reserve command post.

Despite its vast size, Fort Hunter Liggett does not boast a large population; only 250 personnel live on the base year-round. However, because of its role as a training center, the fort can easily accommodate thousands of soldiers at once."],
            ["061328071", "Fort Irwin", "fort-irwin", "Fort Irwin National Training Center is a United States Army base and training facility located in San Bernardino County, California in the Mojave Desert. Situated 37 miles from the town of Barstow and resting in the Calico Mountains, Fort Irwin houses just under 9,000 soldiers. 

This military facility was built in 1940, originally designed as an anti-aircraft range. The Mojave Anti-Aircraft Range was put in place by Franklin D. Roosevelt. The facility was renamed for Major General George LeRoy Irwin in 1942. The fort was used as a training center during World War I, but was closed shortly after, and did not reopen again until 1951 when it served as a combat training facility during The Korean War. 

The occupants of the current main fort are formed by The U.S. Army Forces Command while an opposing force for training exercises, the 11th Armored Cavalry Regiment, make camp at a lower elevation."],
            ["080859041", "Fort Carson", "fort-carson", "Located near Colorado Springs in Central Colorado, Fort Carson acts as a United States Army installation. The 137,000 acre base is home to a dozen different military regiments, including the 4th Infantry Division as well as the 10th Special Forces group. Built in 1942, Fort Carson is named after legendary American frontiersman Christopher &quot;Kit&quot; Carson.

Fort Carson was a direct response to the Japanese attack on Pearl Harbor during World War II. During the war, more than 100,000 soldiers trained at the camp, while nearly 9,000 prisoners of war were interned throughout the duration of World War II. After the war, the Fort began training soldiers in survival over mountainous terrains.

Notable former Fort Carson soldiers include former Secretary of State Colin Powell as well as Olympic Gold Medal winning boxer Andrew Maynard. Fort Carson, as well as the 4th Infantry Division, are currently under the command of Major General Ryan F. Gonsalves."],
            ["132195215", "Fort Benning", "fort-benning", "Fort Benning, located near Columbus, Georgia, is a large United States Army base. Known as the &quot;Home of the Infantry,&quot; Fort Benning was founded in 1918 as part of the United States' involvement in World War I; among the first servicemembers stationed at Fort Benning was a young Dwight D. Eisenhower.

After playing a pivotal role as a staging location for Europe-bound troops during World War II, the base grew dramatically during the Cold War. Today, more than 120,000 people live or work at Fort Benning. The base has earned particular renown as a training center for infantry divisions, a role it took over from Fort Knox. 

Left-wing protesters have frequently gathered at Fort Benning to challenge the Western Hemisphere Institute for Security Cooperation, formerly known as the School of the Americas. While these individuals charge the school has trained Latin American military dictators, Congress has continued to fund the institute."],
            ["132203073", "Fort Gordon", "fort-gordon", "Fort Gordon is one of the most important military facilities in the United States. Located near Augusta, Georgia, the installation was established in 1917 and was named in honor of Confederate Major General John Brown Gordon. Operated by the United States Army, the facility was of paramount importance during both World War I and World II. Following World War II, Fort Gordon was greatly expanded in size, and became a major site for Army basic training.

While Fort Gordon serves the United States in a variety of capacities, it is most well known as the home for United States Army Signal Corps. Personnel at the facility specialize in Signal Intelligence in particular, with many Army Intelligence units based out of the fort.

Fort Gordon has had a major economic impact on the Augusta area. Currently, the facility employees around 30,000 people, both military personnel and civilians."],
            ["132218029", "Fort Stewart", "fort-stewart", "Located in the eastern Georgia city of Hinesville, the United States Army's Fort Stewart is the largest military base east of the Mississippi. Located on over 280,000 acres, Fort Stewart is part of the Hinesville-Fort Stewart Metropolitan area, which has a population of 77,917. The main force garrisoned at Fort Stewart is the Army's 3rd Infantry Division, which specializes in ground combat missions. 

Originally named Camp Stewart in 1940, the fort was named after Revolutionary War hero and Georgia native Daniel Stewart. The base has seen plenty of use over the years, including a massive staging of the 1st Armored Division at Fort Stewart during the peak of the Cuban Missile Crisis.

The 3rd Infantry Division at Fort Stewart is under the command of Major General James E. Rainey. One of the most prestigious divisions of the U.S. Army, the 3rd Infantry Division has served in both World Wars."],
            ["150565003", "Fort Derussy", "fort-derussy", "Fort DeRussy is located in Waikiki, Honolulu and run by the United States Army. Largely, Fort DeRussy integrates with the surrounding civilian community, as it is unfenced and pretty much open to public traffic. An important military function that the area serves is as host facility for the Asia-Pacific Center for Security Studies. There is also a Chapel at Fort DeRussy for use as well.

The area was built in 1911 to defend the harbor at Honolulu from being attacked. This rich history includes the use of AH-1 Cobra helicopters.

The reservation is home to the U.S. Army Museum of Hawaii, which all are welcome to visit. It is also host to the Hale Koa Hotel, which is open to authorized personnel associated with the military."],
            ["150585003", "Fort Shafter", "fort-shafter", "The oldest of 11 military bases in Hawaii, Fort Shafter resides on the island of Oahu in Honolulu. The base has been in use for over 100 years, and is the headquarters for the U.S. Army, Pacific. Fort Shafter contains Palm Circle, a National Historic Landmark that used to house the commanding general.

Fort Shafter opened in 1907, and is named after Major General William Rufus Shafter, a Medal of Honor recipient who served in the Civil War. The Fort staff includes nearly 8,000 active duty military personnel and more than 11,000 family members. Some of the fort's more than 8,000 civilians work at Tripler Army Medical Center.

The United States Army Pacific is currently led by General Robert B. Brown, the highest ranking military officer at Fort Shafter. Since 1907, Fort Shafter has been a vital part of the United States military presence in the South Pacific region."],
            ["201823103", "Fort Leavenworth", "fort-leavenworth", "Fort Leavenworth is one of the most famous military installations in the world. Located in northeast Kansas, Fort Leavenworth was built in 1827, making it one of the oldest military bases in the country. The fort is named after Colonel Henry Leavenworth, who built it to protect the Santa Fe Trail. Fort Leavenworth was a highly important installation during the Indian Wars of the 1800s, and was also used as a training ground for soldiers during the 20th Century.

The facility is run by the United States Army. Fort Leavenworth is home to the United States Army Combined Arms Center, a school where Army officers learn the most innovative new leadership strategies and combat tactics. The fort also houses the United States Disciplinary Barracks, a maximum security military prison.

Fort Leavenworth employs over two thousand people, most of them being students at the Combined Arms Center and support personnel for the facility. The installation also employs many military police officers who work in the Army's correctional center."],
            ["201826061", "Fort Riley", "fort-riley", "Fort Riley is a United States Army Installation in Kansas. Located on the Kansas River, it is composed of Camp Funston, Camp Forsyth, Camp Whiteside and Custer Hill. It is known as home of the First Infantry Division, or &quot;Big Red One.&quot;

For Riley was established in 1853 to oversee trade and westward immigration on the Oregon and Santa Fe Trails. The installation is known for its Buffalo Soldiers cavalry and housed the United States Cavalry School, where military personnel were trained in tactics for World War I and World War II. 

Currently, Fort Riley is home to Garrison Command, which bolster's Fort Riley's mission with training, support for family and environmental stewardship. Fort Riley operates the First Infantry Division, which produces and maintains combat-ready forces for deployment. Soldier and family populations exceed 18,000 soldiers, 24,000 family members and over 7,000 civilian workers for a total population of 53,000."],
            ["211163047", "Fort Campbell", "fort-campbell", "The address of Fort Campbell does not tell the full story of its actual location with nearly 103,000 acres in Kentucky and Tennessee. In 1941, facilities were opened with only 20 servicemen attached to an armored or infantry division. Today, nine units are stationed here including the 101st Airborne, 5th Special Forces, 52nd Ordnance Group, and 19th Air Support Operations Squadron. 

This is a United States Army facility with supporting forces of the same branch responsible for its operations. Examples of these include two hospitals with the 86th Combat Support Hospital and Blanchfield Army Community Hospital. The 63rd Chemical Company and Sabalauski Air Assault School highlight the operations and support diversity of the compound. 

Fort Campbell is one of the front-line Army camps for Special Forces and infantry training. Barracks accommodate over 2,400 officers and more than 45,000 enlisted service personnel. The Screaming Eagles is an expert parachuting team known for its precision free-falling capability."],
            ["211167093", "Fort Knox", "fort-knox", "Fort Knox is a United States Army post located near Elizabethtown, Kentucky, south of Louisville. Although historic military facilities in the area date to the Civil War, modern-day Fort Knox was created during World War I. It officially opened in 1918.

Initially known as a home of the American calvary, the base has been significantly downsized during rounds of Base Realignment and Closure. As a result, Fort Knox is today home to the United States Army Human Resources Command, an organization with national import. More than 12,000 people reside on the base and it supports thousands more jobs in the Elizabethtown area.

The post is most famous as the home of the United States Bullion Depository. Contrary to popular belief, this facility is operated under the control of the United States Department of the Treasury. Aside from its physical location on a military installation, the depository is a civilian institution."],
            ["220772115", "Fort Polk", "fort-polk", "Located near Leesville, Louisiana, Fort Polk provides training for the United States Army, Air Force and Navy. It currently trains forces such as light infantry and special operations for Operation Enduring Freedom, Operation Noble Eagle and Operation Iraqi Freedom. 

Established in 1941, Fort Polk was named for Lieutenant Leonides Polk. The base trained soldiers for important wars in United States history, such as World War II and the Vietnam War. In 1993, Fort Polk acquired the Joint Readiness Training Center, which provides realistic training reflective of actual missions and operations. 

On the cutting edge of military standards of quality, Fort Polk boasts a new Consolidated Library and Education Center, Post Headquarters and processing center for soldier readiness. The total base population of Fort Polk is 31,873, 8,240 of which are Army personnel and 5,919 of which are non-military employees. The retiree population within 40 miles of the base exceeds 16,000."],
            ["240571021", "Fort Detrick", "fort-detrick", "Fort Detrick is located in Frederick, Maryland, and serves as an installation for the United States Army Medical Command. Named after Major Frederick L. Detrick, a squadron flight surgeon, it's been in operation since 1931. During that time, the original 800 acres that made up the installation have increased by 50 percent up to 1,200 acres.

From 1943-69, Fort Detrick was the home of the country's biological weapons program but now serves in a protective capacity in managing defense against biological weapons. The secretive nature of its origin was such that it wasn't until after World War II had ended that American citizens became aware of any biological research being done,

In the first decade after World War II, a collection of over 1,500 Austrian and German scientists were recruited to assist in the development of new aircraft and technologies related to missiles. Now, more than 7,800 people work there."],
            ["240575003", "Fort Meade", "fort-meade", "Fort Meade is one of the most important military installations in the world. Located in Maryland a short distance from Washington D.C., the facility is run by the United States Army and is named after Civil War General George Meade. Originally established in 1917, Fort Meade served as an important training facility during both World War I and World War II. During the Cold War, the facility became highly important both for national security and air defense.

Today, Fort Meade is home to many United States Army and intelligence programs. Notably, the National Security Agency, United States Cyber Command, and Defense Information Systems Agency are all headquartered in the facility. These agencies coordinate with one another to ensure global safety and prosperity. 

At just under eight square miles, Fort Meade is one of the largest Army bases in the world. Additionally, the facility employs over forty-two thousand individuals, both in the military and in civilian agencies."],
            ["261755025", "Fort Custer", "fort-custer", "Fort Custer currently serves as a Michigan Army National Guard training facility, and is located only a couple miles from Battle Creek, Michigan. Originally constructed in 1917 as a military training outpost during World War I, Fort Custer has become one of the most active and heavily used training centers in the Midwest.

The location of Fort Custer allows military personnel from neighboring states such as Illinois, Indiana and Ohio to use the facility. Multiple training institutions are located within Fort Custer, such as the Fort Custer Education Center and the Regional Maintenance Training Site.

Named after former Civil War general George Armstrong Custer, the fort has had a long history of training soldiers. Over 100,000 men were trained at Fort Custer during World War I, with another 300,000 being prepared for combat during World War II. Today, Fort Custer functions as a training grounds for small arms and maintenance needs."],
            ["292855169", "Fort Leonard Wood", "fort-leonard-wood", "Fort Leonard Wood serves as a base for the United States Army and is located near Waynesville, Missouri, within the Missouri Ozarks. It was created in 1940 and quickly evolved from a training ground for infantry into one focused on developing engineers for the U.S. Corps of Army Engineers. 

The base is named for Medal of Honor winner Leonard Wood, who was a former Army Chief of Staff. During World War II, the base served as a POW camp to house German and Italian soldiers.

It functions as an Army Maneuver Support Center, with schools that train members of the Military Police Corps and Army Chemical Corps. These are now part of the base, after being transferred when Alabama's Fort McClellan closed in 1999. The Military Police Corps serves as the Army's law enforcement branch and the Chemical Corps is tasked with defending against different weapons of a chemical nature."],
            ["362105047", "Fort Hamilton", "fort-hamilton", "Brooklyn, New York is the home of Fort Hamilton, predictably named after former Secretary of the Treasury Alexander Hamilton. The fort has a long history since being built in 1825, as it was the very first United States National Guard training site. Notable military men such as Stonewall Jackson, Robert E. Lee and Abner Doubleday all spent time stationed at Fort Hamilton.

Fort Hamilton serves nearly every branch of the military, with active duty personnel from the Navy, Army, Air Force, Marines, Coast Guard and National Guard all stationed there. Some of the garrisoned units that serve Fort Hamilton include the North Atlantic Division of the Army Corps of Engineers and the U.S. Army New York City Recruiting Battalion.

The Harbor Defense Museum and the Robert E. Lee House are both contained within Fort Hamilton. The fort is currently under the command of Colonel Joseph Davidson."],
            ["401698031", "Fort Sill", "fort-sill", "Fort Sill is a U.S. Army post located near Lawton, Oklahoma, about 85 miles southwest of Oklahoma City. This is where all field artillery soldiers and Marines are trained. 

Fort Sill is home to the Field Artillery School, the primary training facility for field artillery soldiers and marines worldwide, as well as the Army Air Defense Artillery School and the 75th Fires Brigade and the 31st Air Defense Artillery Brigade. It is also one of four locations where Army Basic Combat Training takes place. 

Of all the Army installations built during the Indian Wars, Fort Sill is the only one that is still active. It has been a part of every major U.S. conflict since it was staked out in 1869. It was designated as a National Historic Landmark in 1960."],
            ["450885079", "Fort Jackson", "fort-jackson", "Located in the South Carolina capital of Columbia, Fort Jackson is a United States Army base with a proud heritage. Named after former President Andrew Jackson, Fort Jackson was built in 1917 as a response to World War I. The fort briefly shut down after the end of the war, but was reactivated during World War II.

The United States Army relies on Fort Jackson to train nearly 50 percent of all soldiers entering the Army each year. The Initial Training Academy at Fort Jackson, along with the Soldier Support Institute, serve as the primary garrisons at the fort. Fort Jackson is also home to the U.S. Army Chaplain Center and School.

Fort Jackson sits on approximately 52,000 acres of land, which includes more than 1,000 individual buildings. The population at the fort consists of nearly 4,000 active duty personnel as well as 2,000 reserve members and nearly 10,000 family members."],
            ["482433141", "Fort Bliss", "fort-bliss", "Situated along the southern border of the United States, Fort Bliss is the U.S. Army's second-largest military installation. The base sits on 1.12 million acres adjacent to El Paso, Texas, with part of it sitting in a census-designated place (CDP). The current population of the base is 8,591, according to 2010 census stats. It was first established on November 7, 1848 and is currently home to the 1st Armored Division.

Volunteers with the 1 st Regiment of Missouri first came through the area in 1846, during the Mexican American War. The area now known as Ciudad Juarez was then known as El Paso del Norte. An order came down soon afterward to establish a post on the north side of the Rio Grande river, in the same area. That first post was established at a ranch in what is now downtown El Paso.

It was one of a series of posts that sprang up nearby over the next few years, including posts in San Elizario and Mesilla, New Mexico. The Post of El Paso, later renamed Fort Bliss, was established in 1854. Although it changed locations a number of times before settling on current site in 1893, the name Fort Bliss was kept.

As of 2014, Fort Bliss was home to about 33,500 soldiers. Due to some downsizing efforts by the Army, that number is expected to drop in the coming years. Stats from 2011 show that around 4,000 civilians were working there at the time, although that number was also expected to decrease. The base is known to host various joint military exercises with foreign units and conducts live-fire exercises with virtually every type of weapon used by the United States Army."],
            ["482437027", "Fort Hood", "fort-hood", "Fort Hood is a military facility located in the Central Texas city of Killeen. Situated almost exactly between Austin and Waco, the post has a population 53,516, making it the largest U.S. military installation in the world. The post belongs to the United States Army, and currently serves as a site to prepare units for deployment abroad. 

Because of the rise in tank warfare during World War II, the U.S. Army was searching for a wide-open site that could be utilized for tank destroyer testing and training. In January of 1942, the War Department acquired 108,000 acres in Central Texas and began construction. Now, the multipurpose post serves as home to over 45,000 assigned soldiers and airmen. 

Fort Hood currently employs 19,367 civilians and contractors. Because of the post's large population, there are a multitude of job opportunities both inside the facility and in the surrounding area."],
            ["482438029", "Fort Sam Houston", "fort-sam-houston", "Located in San Antonio, Texas, Fort Sam Houston is operated by the United States Army. The post is sometimes referred to as &quot;Fort Sam.&quot; The post serves as headquarters for the U.S. Army North, Army South and Medical Command. The installation is considered the &quot;Home of Army Medicine&quot; and a forerunner in medical training. 

The base is named for Sam Houston, the first President of the Republic of Texas. The post was recognized as the &quot;birthplace of aviation&quot; until the 21st Century. The Medical Education and Training Campus, established in 2010, redefined the installation as one specializing in medical training. 

Fort Sam Houston is considered to be the most important site of military medical training in the world. Over 25,000 students are trained each year at Fort Sam. Notable universities such as Baylor and the University of Texas offer coordinated programs for the provision of medical education with Fort Sam."],
            ["510998135", "Fort Pickett", "fort-pickett", "Fort Pickett is a military installation managed by the Virginia Army National Guard. It consists of roughly 45,000 acres and is located near the town of Blackstone, Virginia. At its height, it featured both rail and air access (via Blackstone Army Airfield).

Fort Pickett was surveyed by the CCC and selected as a training area suitable for multiple infantry divisions in 1941. Construction was accelerated as the US entered the second world war in 1942, and the base consisted of over 1,400 buildings at the end of that year. The goal was to support 60,000 soldiers in training, and infrastructure to enable population was constructed by the end of the war.

After World War 2, the camp was mostly abandoned. The infrastructure was turned over to the town of Blackstone. Today, portions of the 45,000 acres on post have been reconditioned into training areas that are used by the National Guard and Army Reserve."],
            ["511001059", "Fort Belvoir", "fort-belvoir", "Fort Belvoir is a United States Army base located in Fairfax County, Virginia. It was created in 1917 with America in the midst of World War I and originally known as Camp A.A. Humphreys. However, during the 1930's, the name change took place in order to honor the Belvoir estate that was located on its land.

The vast landscape that encompasses Fort Belvoir also includes Davison Army Airfield, with the entire workforce accounting for more than 51,000 jobs. One of the key reasons for so many people being on staff is the directive to close bases in 2005, which jobs being funneled to Fort Belvoir.

Prior to the mid-1980's, the base served as the Army Training School, though it still remains the home of the 29th Light Infantry Division of the Virginia National Guard. Among Army Major Commands, Fort Belvoir has connections to 10 of them, along with 19 agencies."],
            ["511004700", "Fort Eustis", "fort-eustis", "Fort Eustis is a U.S. Army base near Newport News, Virginia, where officers and enlisted soldiers are trained on transportation, aviation maintenance, logistics and deployment research and doctrine. Fort Eustis houses the U.S. Army Training and Doctrine Command the U.S. Army Aviation Logistics School and the 7th Transportation Brigade. 

Fort Eustis was known as Mulberry Island in colonial times. English settlers first landed there in the early 17th century. The federal government bought the land in 1918 in preparation for World War I. It was named after Brevit Brigadier Gen. Abraham Eustis, a military leader in the 19th century. It became a permanent military outpost in 1923. 

Fort Eustis comprises 8,300 acres of land and employs about 9,600 military personnel and 4,150 civilians. The area is bounded by the James River and the Warwick River, which are used for recreational and commercial fishing and recreational boating activities."],
            ["511008013", "Joint Base Myer-Henderson Hall", "joint-base-myer-henderson-hall", "Fort Myer is a post commanded by the U.S. Army. It is located in Arlington, Virginia, near the historic Arlington National Cemetery--site of the historic Tomb of the Unknown Soldier. The base began as Fort Whipple, a military post built and used during the U.S. Civil War; it was renamed Fort Myer in 1887. Today, the base is a part of the Joint Base Myer-Henderson Hall group along with Henderson Hall and Fort McNair.

The facility has been the site many historic firsts: the first military aviation flight, the first radio transmissions of the National Aviation Academy, and the inception of The National Weather Service.

Fort Myer's function is to support homeland defense and other operations as needed. After the 9/11 attacks, troops were stationed at the base to be at the ready for deployment. The facility employs approximately 9,800 active duty personnel, 3,500 family members and 1,000 civilians."],
            ["510997033", "Fort A.P. Hill", "fort-ap-hill", "Started as an Army training facility in June, 1941, Fort A.P. Hill is located just off Route 301 in Caroline County, Virginia, near the small town of Bowling Green. The facility is named after native Virginian and Confederate Lieutenant General A.P. Hill.

Fort A.P. Hill has served a number of roles and has gone through some changes since its opening. During the Korean Conflict, the facility was re-named Camp A.P. Hill and served as a main staging area for troops being deployed to Europe. In 2011, development of the Explosive Ordnance Disposal Training Center (named after Captain Jason McMahon who died in Afghanistan in 2010) was completed. The base now serves as a training facility for all branches of the United States Military.

Fort A.P. Hill also is known for hosting the annual Boy Scouts of America National Jamboree for almost ten years starting in 1981."],
            ["110100001", "Fort McNair", "fort-mcnair", "Fort McNair (commonly referred to as Fort Lesley J. McNair) is a United States Army fort located in Washington D.C. One of the oldest military bases in the country, Fort McNair was built in 1791 and has seen continuous usage for more than 200 years. 

Originally built as an arsenal site that could be used to defend the capital, Fort McNair currently serves as the home of the United States Army Military District of Washington as well as the National Defense University. The university specializes in national security training. Fort McNair is also the official residence for the U.S. Army's vice chief of staff.

The fort is named after World War II Lieutenant General Lesley J. McNair, who was killed in France during the execution of Operation Cobra in 1944. Currently, the fort is under the command of Major General Jeffrey S. Buchanan, the Commanding General of the Military District of Washington."],
            ["551765081", "Fort McCoy", "fort-mccoy", "Fort McCoy is a U.S. Army installation located approximately 100 miles northwest of Madison, Wisconsin. First formed in 1909 as the Sparta Maneuver Tract, Fort McCoy has since existed primarily as a military training base. It became officially known as Fort McCoy in 1974 after its activation by the U.S. Army as a permanent training center. The base employs approximately 1,300 military personnel and is home to the 86th Training Division and the 181st Infantry Brigade of the First Army.

In addition to its primary role as a training base, Fort McCoy has served as a detention center for POW's during WWII and a deployment hub for Operations Desert Storm and Desert Shield during the Gulf War.

The base features heavily in the 2011 American drama &quot;Fort McCoy.&quot; The film concerns a young man who moves his family to Wisconsin to become a barber for the U.S. Army during WWII."],
            ["250365017", "Fort Devens", "fort-devens", "The United States Army Reserve operate out of Fort Devens, which is located in northeastern Massachusetts, just north of the Oxbow National Wildlife Refuge. Fort Devens occupies approximately 5,000 acres of land, and is home to the United States Army Base Camp Systems Integration Laboratory, a military research institution.

Fort Devens was named after Charles Devens, a Civil War general and native son of Massachusetts. The fort was built in 1917 as a temporary facility for training World War I soldiers. The Army post at Fort Devens closed in 1996, and was later converted to an Army Reserve installation. 

Lieutenant Colonel Charlette K. Woodward currently acts as the commanding officer at Fort Devens, overseeing roughly 300 enlisted personnel. A portion of the former military base is now being used as the grounds for the Federal Medical Center, Devens, a prison specializing in mental health care treatment."],
            ["RQ0395000", "Fort Buchanan", "fort-buchanan", "Located in San Juan, Puerto Rico, the United States Army Garrison Fort Buchanan Puerto Rico is operated by the United States Army. Most activities conducted at Fort Buchanan support the United States Armed Forces Reserve Component. In addition to the Puerto Rico National Guard, Fort Buchanan is home to the United States Army Reserve, Navy Reserve and Marine Corps Reserve. 

Camp Buchanan, the predecessor to Fort Buchanan, was established in 1908. Troops housed at Camp Buchanan defended the Canal Zone in the First World War. Renamed Fort Buchanan in 1940, the installation played a role in the Second World War and the Korean War, protecting U.S. interests in Latin America. 

The population of Fort Buchanan is 130,000 people, including military personnel, dependents, retirees, veterans and civilian employees. Fort Buchanan offers many services to residents and boasts a diverse community. Fort Buchanan's area of responsibility is Central and South America."],
            ["159700003", "Wheeler Army Airfield", "wheeler-army-airfield", "The Wheeler Army Airfield Base is an American controlled and operated Army base located in Honolulu, Hawaii. Built in 1922 The Wheeler Army Airfield is one of the most prominent Army bases in Hawaii, playing key roles in both World Wars. 

Built to mimic the English style of The Garden City, The Wheeler Army Airfield is known for its spacious greenery and Spanish Colonial style living quarters. This Army base occupies an approximate 1,389 acres of land. With an estimated 2,829 active employed military personnel living within the Army base, The Wheeler Army Airfield is also one of the biggest Army bases located outside of the United States.

The main operations of The Wheeler Army Airfield consist of air training for Army troops. The troops located here practice advance techniques and Army drills dealing with Army planes, such as ascending, descending, aerial strikes and aerial combat."],
            ["012585089", "Redstone Arsenal", "redstone-arsenal", "Founded in 1943, the Redstone Arsenal is set in Alabama, at 34&deg;41'03&quot;N 86&deg;39'15&quot;W latitude and longitude. In 2010, 1,946 people lived there. It was first a chemical weapons manufacturing facility in World War II, but in the post-war era it housed German rocket scientists involved with Operation Paperclip.

The team started on a series of ballistic missiles, beginning with V-2 rocket derivatives, then proceeding to a series of increasingly larger designs. During the Korean War, OGMC was told to develop a surface-to-surface ballistic missile, and the Redstone Arsenal started producing ammunition.

In 1962, the U.S. Army Aviation and Missile Command was activated. The Redstone Arsenal hosts the Marshall Space Flight Center, which is NASA's center for propulsion development and analysis."],
            ["053151069", "Pine Bluff Arsenal", "pine-bluff-arsenal", "Located in Jefferson County, Arkansas, Pine Bluff Arsenal is a United States Army facility thirty-five miles southeast of Little Rock. Pine Bluff's main function is to store, maintain and distribute various readiness products for the U.S. Military and the Department of Defense.

This facility also provides technical services to the Armed Forces and the Department of Homeland Security. Chemical and biological defense products, as well as various other munitions, are designed, manufactured and refurbished at this location. 

Built in 1941, and originally called The Chemical Warfare Arsenal, Pine Bluff provided a manufacturing location for grenades and bombs during World War II. Later during World War II, Pine Bluff became a chemical warfare manufacturing plant in addition to providing magnesium and thermite incendiary munitions. Biological weapons were also created and tested here until 1969 when they were banned by President Richard Nixon."],
            ["396831133", "Camp Ravenna", "camp-ravenna", "Camp Ravenna, also known as the Camp Ravenna Joint Military Training Center or the Ravenna Arsenal, is located between the cities of Ravenna and Newton Falls in northeastern Ohio. The Ohio Army National Guard uses the camp as its primary training center. The facility sits on 21,683 acres and is approximately 11 miles long, as well as 3.5 miles wide.

Opened in 1942, Camp Ravenna originally consisted of two ammunition plants; the Ravenna Ordinance Plant and the Portage Ordnance Depot. During World War II, the plant in Ravenna had a huge impact on the local community, with over 14,000 people finding employment at the plant during the War.

After the conclusion of the Vietnam War, the Ravenna Arsenal ceased all ammunition production. The site remained dormant for several years, before being converted into a National Guard training center. Camp Ravenna is currently being discussed as a potential missile defense site."],
            ["082151001", "Rocky Mountain Arsenal", "rocky-mountain-arsenal"],
            ["342585027", "Picatinny Arsenal", "picatinny-arsenal", "Picatinny Arsenal is located on 6400 acres in Wharton, in Jefferson and Rockaway Townships in New Jersey. Its headquarters are located in Morris Township. It was founded in 1880 and is run by the U.S. Army. Picatinny Arsenal employs approximately 6,000 engineers, support personnel and scientists. 

Although World War II briefly delayed the basic scope of Picatinny Arsenal's major research and development of military products, by 1977, the site resumed its weaponry research and development on nuclear munitions, radar, pyrotechnics, time fuzes and missiles. By the 1980s, Picatinny Arsenal property was expanded by 12 acres. It also expanded product research."],
            ["511466810", "Joint Expeditionary Base Little Creek-Fort Story", "joint-expeditionary-base-little-creek-fort-story", "Located in Fort Story, Virginia, Joint Expeditionary Base Little Creek is operated by the United States Navy. The base is home to and trains United States Expeditionary Forces. It is the merger of Fort Story and Naval Amphibious Base Little Creek. 

Established in 1914, Fort Story is officially named Joint Expeditionary Base East.During the Second World War Fort Story became a hospital, then a training ground for amphibious vehicles. The Naval Amphibious Base was established in 1942, where it served as a training base for amphibious vehicles. It continues to support amphibious vehicle training and deployment for all branches of the armed services. 

To support its population, Joint Expeditionary Base Little Creek boasts numerous services. It has deployed forces support, family readiness, and a Navy Wounded Warrior Safe Harbor Program. The base also offers recreational activities such as fitness and sports centers, movies, libraries, golf, bowling and youth centers."],
            ["350871013", "White Sands Missile Range", "white-sands-missile-range", "White Sands Missile Range was created on July 9, 1945 in order to test long range rockets. Although the first atomic bomb was not exploded on the range itself, it was set off near the northern boundary. Many famous rockets and missiles, such as the V-2, were launched and tested here. 

Today, it continues to be the largest test range in the United States, spanning 3200 square miles and containing parts of five counties of Southern New Mexico. Many sophisticated and advanced weapons systems are tested here each year. 

The range is run by the United States Army Test and Evaluation Command and is itself composed of many different organizations, including the Logistics Readiness Center and Garrison Resource management. It is currently commanded by Timothy Coffin, and employs nearly four thousand people."],
            ["110400001", "Washington Navy Yard", "washington-navy-yard", "The Washington Navy Yard is a former shipyard in southeast Washington D.C., and is the oldest facility of its kind in the Navy. Built in 1799 and added to the National Register of Historic Places in 1973, the Washington Navy Yard encompasses about 2.2 million square feet and includes the United States Navy Museum. 

16,000 people work at the Washington Navy Yard, which currently serves as a center for Navy affairs, being home to the Chief of Naval Operations, the Naval Sea Systems Command, the Marine Corps Institute, and the United States Navy Band among others.

The site continues to be cleaned up and revitalized, and is close to transportation as well as attractions in the DC Metro area. The Washington Navy Yard is friendly to visitors and civilians, hosting many events throughout the year."],
            ["090717011", "Naval Submarine Base New London", "naval-submarine-base-new-london", "The Naval Submarine Base New London had its origins in an 1868 gift to the Navy from the state of Connecticut. This convenient location in Groton allowed for convenient refueling for naval vessels, as well as provided a place for inactive ships. With the advent of submarines in the early 20th century and new nuclear technology in the 1950's, the base has become a major hub for the United States Navy.

The base sits along Connecticut's Thames River, which gives it a very strategic location both for the Navy and civilians who work at the base. All of the facilities serve a total of 21,000 people that includes both service members and their families, as well as the civilians employed here.

Major features at this base include the Naval Submarine Support Facility, Naval Submarine School, and the Naval Submarine Medical Research Laboratory, which provides vital research. The base also contains the U.S. Submarine Force Museum, home to one of the largest collections of Naval artifacts in the country."],
            ["158803003", "Tripler Army Medical Center", "tripler-army-medical-center", "Located in Hawaii and recognized for its pink color, Tripler Army Medical Center is operated by the United States Army. It is the headquarters of the Pacific Regional Medical Command. Tripler Army Medical Center is also the largest medical center in the Pacific Rim region.

Tripler Army Medical Center was established in the wake of the Japanese Attack on Pearl Harbor. It played a pivotal role in the rehabilitation of U.S. troops during World War II. The building's pink color was inspired by the Royal Hawaiian Hotel, where soldiers congregated for entertainment.

Tripler's Center of Excellence in Disaster Management and Humanitarian Assistance is designated by the United Nations as the only Peace Operations Institute in the United States. The medical center serves a local population of 264,000 active duty and retired military personnel, along with their families. Services include outpatient and in-patient clinics, health education and a rapid response team."],
            ["240036031", "Walter Reed National Military Medical Center", "walter-reed-national-military-medical-center", "The Walter Reed National Military Medical Center (WRNMMC) is a military medical center located in Bethesda, Maryland. It was dedicated in 2011, six years after a merger was announced that would have medical personnel for the Army, Navy and Air Force working together to aid in the treatment of injured and sick veterans

However, the origins of this facility date back to 1942, when the Bethesda Naval Hospital opened. The merger with Walter Reed Army Medical Center kept the name of the man who helped discover how yellow fever was treated, which helped lead to a vaccine and the eventual construction of the Panama Canal. 

The facility has long been used by the incumbent president for any needed treatment. On the evening of the assassination of President John F. Kennedy on November 22, 1963, the late president's autopsy was conducted. The subsequent findings have since become the source of controversy."],
            ["040622027", "Yuma Proving Ground", "yuma-proving-ground", "Yuma Proving Ground is a United States Army installation and is one of the largest in the world. Located about 30 miles northeast of Yuma, the area is primarily used for testing military equipment. Quite large, Yuma Proving Ground encompasses 1,307.8 square miles in the Sonoran Desert.

3,000 people work at the Yuma Proving Ground, most of whom are civilians. Employees at the Yuma Proving Ground conduct tests on most weapons systems employed as part of the ground combat arsenal. For instance, one year will generally see over 500,000 artillery, mortar, and missile rounds.

The area gets about 3 inches of rain per year and is otherwise saved from noise and urban development. Yuma Proving Ground received its full name and was designed as a Major Range and Test Facility Base by 1974."],
            ["490354045", "Dugway Proving Ground", "dugway-proving-ground", "Located near Salt Lake City, Utah, Dugway Proving Ground is operated by the United States Army. The primary function of Dugway is to test biological and chemical weapons in a safely isolated space. The Army Reserve, National Guard and Army Special Forces also train on site.

Established in 1941 by the Army's Chemical Warfare Service, Dugway provided a remote location for weapons testing. Weapon technology implemented in the Second World War was tested at Dugway, including flamethrowewrs, toxic agents, chemical sprays, antidotes and protective clothing. Dugway also served as a training ground for desert operations in the 1990s. 

Dugway spans 1,300 square miles. Its employee population is composed of 1,715 military, Department of Defense and civilian personnel. Chemists, biologists, engineers and technicians collaborate to support the mission of Dugway Proving Ground. Divisions include a chemical testing, data management, life sciences, meteorology and special programs for advanced trainees and first responders."],
            ["451615079", "McEntire Air National Guard Base", "mcentire-ang-base", "McEntire Air National Guard Base is located about 15 miles southeast of Columbia, S.C. It is affiliated with the South Carolina Air National Guard and owned by the U.S. Air Force. It was established in 1946 and named for Brigadier Gen. Barnie B. McEntire, Jr., who was the first commander and first general officer of the South Carolina Air National Guard.

About 1,250 people train at McEntire Air National Guard Base. The base is home to the 169th Fighter Wing, as well as the 245th Air Traffic Control Squadron and the 59th Aviation Troop Command. 

The South Carolina Air National Guard has been called to deploy during five major battles: during the Korean War, during the Berlin Crisis, for Operation Desert Shield / Storm, for Operation Enduring Freedom, and in support of the War on Terrorism."],
            ["250975001", "Otis Air National Guard Base", "otis-ang-base", "Located near Mashpee, Massachusetts, within Joint Base Cape Cod, Otis Air National Guard Base is operated by the United States Air Force. Coast Guard Air Station Cape Cod and the 102nd Intelligence Wind are the Base's major units. It functions primarily as a military training facility. 

Built in 1938, the Otis Air National Guard Base is named for Lieutenant Jesse Otis, a flight surgeon and pilot who died in a crash during a training mission. It played a major role in the Cold War's Bay of Pigs and Berlin crises. Planes were dispatched from the base to intercept the September 11, 2001, attacks. 

Otis Air National Guard Base has its own school district. Notable programs on the base include National Guard Family Programs, Employer Support of the Guard and Reserve, Joint Services Support, child care and other community programs. It is also a test site for unmanned aircraft."],
            ["264515099", "Selfridge Air National Guard Base", "selfridge-ang-base", "Selfridge Air National Guard Base (The 127th Wing) is located near Detroit, Michigan in Harrison Township. The base is run by the Michigan Air National Guard. It is also a duty station for every branch of the U.S. Armed Forces, and works closely with the Department of Homeland Security. The complex is operated by the Air National Guard, functioning under the jurisdiction of the United States Air Force when needed. 

SANGB began as a simple field leased from its owner in 1917. From this start during World War I, it has been an important training ground for various squadrons. Over the years, it has served members of every branch of the United States military--including the historical Tuskegee Airmen.

In 1947, the then expanded and developed field was officially given the title of Selfridge Air Force Base. Today, the base is home to approximately 6,000 military members, military personnel, and civilians."],
            ["421943133", "New Cumberland - DLA", "new-cumberland-defense-logistics-agency", "Located in New Cumberland, Pennsylvania, Defense Logistics Agency (DLA) at New Cumberland is concerned with resource distribution, environmental stewardship, engineering and public safety for the Department of Defense. Over $37 billion resources are processed and distributed by DLA each year. DLA also supports international and domestic humanitarian relief. 

The DLA primarily serves support functions, such as distribution of commodities and resources to all military branches. It was established to support efforts of the First World War. Currently, commodities processed by DLA range from food and fuel to uniforms.

New Cumberland hosts the DLA's largest distribution center. Primary responsibilities of this location include inventory management and forecasting, management of supply chains, weapons systems support and research in alternative fuels and cost reduction. DLA at New Cumberland serves a population of 5,632 Department of Defense employees and dependents."]
        ];

        foreach ($seeds as $seed)
        {
            $geo_code = GeoLocCode::whereCode($seed[0])->first();

            $content = null;

            if (isset($seed[3])) $content = $seed[3];

            $facility = Facility::createFacility(
                $seed[0],
                $seed[1],
                $seed[2],
                $content
            );

            if ($facility->wasRecentlyCreated)
            {
                $state = Location::createLocation(
                   'state',
                   $geo_code->country_subdivision,
                   getFullStateName($geo_code->country_subdivision)
                );

                if (! empty($geo_code->us_county) && $geo_code->country_subdivision !== 'DC')
                {
                    $county = Location::createLocation(
                        'county',
                        null,
                        $geo_code->us_county,
                        $state->id
                    );

                    $locations = [$state, $county];
                }
                else
                {
                    $locations = [$state];
                }

                $facility->locations()->saveMany($locations);
            }
        }
    }
}