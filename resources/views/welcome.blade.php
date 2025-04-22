<x-layout>

  <x-navigation />
  <x-ayat-of-the-day :latestAyat="$latestAyat" />
  <x-hadith-of-the-day :latestHadith="$latestHadith"/>
  <x-saying-of-the-day :latestSaying="$latestSaying"/>
  <x-features :departments="$departments" />
  <x-picture-gallery :data="$picture_gallery" />
  <x-events :data="$events" />
  <x-personals-section :founders="$founders" />
  <x-news :data="$news" />
  <x-footer />

</x-layout>