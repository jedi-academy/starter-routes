<?php

/**
 * Description of hooker
 *
 * @author peymantp
 */
class hooker {
    /**
     * This is the main function of the actual hook. It grabs the webpage
     * before it is displayed in a browser and modifies it.
     */
    function censor_data()
    {
        /* References the CI superobject to have access to the webpage. */
        $this->CI =& get_instance();
        $page = $this->CI->output->get_output();
        /* Creates a new DOMDocument and loads the HTML of the webpage. */
        $dom  = new DOMDocument();
        $dom->loadHTML($page);
        /* Gets a list of all the <p> HTML elements  and loops through them. */
        foreach($dom->getElementsByTagName('p') as $element)
        {
            /* If the class of the element is lead, it is modified. */
            if($element->getAttribute('class') == 'lead')
            {                
                $temp = $element->textContent;
                $sentence = $this->parse_content(explode(' ', $temp), $dom);
                $this->edit_elements($element, $sentence);
            }
        }
        echo $dom->saveHTML();
    }
    /**
     * Edit an HTML element by inserting new elements into it, whether they
     * are in example tags or bold tags.
     * 
     * @param DOMNode $element An HTML element to have new elements inserted
     * into it, to put capitalized words into a bold tag.
     * @param DOMElement[] $sentence A list of HTML elements to be inserted
     * into the original DOMNode.
     */
    function edit_elements($element, $sentence)
    {
        $element->nodeValue = '';
        foreach($sentence as $node)
        {
            /* Appends a new HTML element at the end of the old one. */
            $element->appendChild($node);
        }
    }
    /**
     * Takes in all the words in an HTML element. If any start with a capital
     * letter and are not a digit they are put into an HTML bold tag, and if
     * not, it is put into an example tag so there is no formatting on that
     * word.
     * 
     * @param string[] $words All of the words inside of an HTML element.
     * @param DOMDocument $dom The HTML code of the page.
     * @return DOMElement[] A list of HTML elements to be inserted
     * into the original DOMNode.
     */
    function parse_content($words, $dom)
    {
        $fourLetterArray = preg_grep("/\b\w{4}\b/", $words);
        $censorIt = "**** ";
        foreach($words as $word)
        {
            if (array_search($word, $fourLetterArray))
            {
                $node = $dom->createElement('el', $censorIt);
            }
            else 
            {
                $node = $dom->createElement('el', $word . ' ');
            }

            $sentence[] = $node;
        }
        return $sentence;
    }
}