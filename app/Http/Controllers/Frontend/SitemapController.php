<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PracticeArea;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use App\Models\Team;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\BlogComment;
use App\Models\MediaCoverage;
use App\Models\Publication;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Response;
use Illuminate\Support\Str;



class SitemapController extends Controller
{


    public function newSitemap() {
        $otherUrls = [
            //url('/area-of-practices'),
            url('/blog'),
            url('/about-us'),
            url('/contact-us'),
            url('/quick-consultation'),
            url('/privacy-policy'),
            url('/terms'),
        ];

        $practiceAreaUrls = $this->getPracticeAreaUrls(0);


        $blogsUrls = $this->getblogsUrls(3);


        //$my_file = '/home/bigdeals24x7/public_html/sitemap.xml';
        // Adjusted file path
        $directory = public_path('sitemap');
        $my_file = $directory . '/sitemap.xml';

        // Create directory if it doesn't exist
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }
        $handle = fopen($my_file, 'w+');

        $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemapContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

        $sitemapContent .= '
        <url>
            <loc>'.url('').'</loc>
            <lastmod>'.date('Y-m-d').'</lastmod>
            <changefreq>weekly</changefreq>
            <priority>1.0</priority>
        </url>';

        foreach ($otherUrls as $url) {
            $sitemapContent .= '
            <url>
                <loc>'.$url.'</loc>
                <lastmod>'.date('Y-m-d').'</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>';
        }

        foreach ($practiceAreaUrls as $url) {
            $url = url('/' . $url);
            $sitemapContent .= '
            <url>
                <loc>'.$url.'</loc>
                <lastmod>'.date('Y-m-d').'</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.7</priority>
            </url>';
        }
        
        foreach ($blogsUrls as $url) {
            $url = url('/blog/' . $url);
            $sitemapContent .= '
            <url>
                <loc>'.$url.'</loc>
                <lastmod>'.date('Y-m-d').'</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.5</priority>
            </url>';
        }




        


        $sitemapContent .= '</urlset>';

        fwrite($handle, $sitemapContent);
        fclose($handle);
        echo "<h2>Blog Sitemap Has Been Updated</h2>";

        // Output the sitemap content
        //return response($sitemapContent)->header('Content-Type', 'text/xml');
        //return response($sitemapContent);

        //header("Location: $my_file");
        //exit();
    }

    private function getPracticeAreaUrls($specialServiceType)
    {
        $practiceAreaUrls = [];
        $practiceAreas = PracticeArea::where(['status' => '1'])->get();

        foreach ($practiceAreas as $practiceArea) {
            $practiceAreaUrls[] = $practiceArea->slug;
        }

        return $practiceAreaUrls;
    }


    private function getblogsUrls($specialServiceType)
    {
        $blogsUrls = [];
        $blogs = Blog::where('status', 1)->whereJsonContains('blog_category_ids',
        ''.$specialServiceType.'')->get();

        foreach ($blogs as $blog) {
            $blogsUrls[] = $blog->slug;
        }

        return $blogsUrls;
    }
}