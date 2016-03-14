<?php
/**
 * Created by PhpStorm.
 * User: goksuadanali
 * Date: 3/13/16
 * Time: 4:13 PM
 */

namespace Felis;


class HomeView extends View
{
    /**
     * Constructor
     * Sets the page title and any other settings.
     */
    public function __construct() {
        $this->setTitle("Felis Investigations");
        $this->addLink("login.php", "Log in");
    }

    /**
     * Add content to the header
     * @return string Any additional comment to put in the header
     */
    protected function headerAdditional() {
        return <<<HTML
<p>Welcome to Felis Investigations!</p>
<p>Domestic, divorce, and carousing investigations conducted without publicity. People and cats shadowed
	and investigated by expert inspectors. Katnapped kittons located. Missing cats and witnesses located.
	Accidents, furniture damage, losses by theft, blackmail, and murder investigations.</p>
<p><a href="">Learn more</a></p>
HTML;
    }

    public function addTestimonial($phrase, $owner){
        $testimonalTuple = array("phrase" => $phrase, "owner" => $owner);
        array_push($this->testimonalCollection, $testimonalTuple);
    }

    public function testimonials() {
        $upperLimitIndex = count($this->testimonalCollection) - 1;
        $midLimitIndex = round(count($this->testimonalCollection)/ 2) - 1;

        $html = <<<HTML
<section class="testimonials">
    <h2>TESTIMONIALS</h2>
    <div class="left">
HTML;

        foreach(range(0, $midLimitIndex) as $index) {
            $testimonal = $this->testimonalCollection[$index]['phrase'];
            $owner = $this->testimonalCollection[$index]['owner'];
            $html .= '<blockquote>';
            $html .= '<p>';
            $html .= $testimonal;
            $html .= '</p>';
            $html .= '<p><cite>';
            $html .= $owner;
            $html .= '</cite></p>';
            $html .= '</blockquote>';
        }
        $html .= '</div>';
        $html .= '<div class="right">';

        foreach(range($midLimitIndex + 1, $upperLimitIndex) as $index) {
            $testimonal = $this->testimonalCollection[$index]['phrase'];
            $owner = $this->testimonalCollection[$index]['owner'];
            $html .= '<blockquote>';
            $html .= '<p>';
            $html .= $testimonal;
            $html .= '</p>';
            $html .= '<p><cite>';
            $html .= $owner;
            $html .= '</cite></p>';
            $html .= '</blockquote>';
        }

        $html .= '</div>';
        $html .= '</section>';
        return $html;
    }

    private $testimonalCollection = array();
}