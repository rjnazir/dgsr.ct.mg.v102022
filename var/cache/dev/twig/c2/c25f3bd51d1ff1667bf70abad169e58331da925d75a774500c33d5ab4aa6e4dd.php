<?php

/* @Admin/CtGenreCategorie/index.html.twig */
class __TwigTemplate_b4cac4805cecea9869a86ce6f8f62d3275082c38735a2843960c61605a264eb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreCategorie/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_756165ed688ee4cb10e5c3e63d9b88039ad14f980ed0742a210a9b0213d5c787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756165ed688ee4cb10e5c3e63d9b88039ad14f980ed0742a210a9b0213d5c787->enter($__internal_756165ed688ee4cb10e5c3e63d9b88039ad14f980ed0742a210a9b0213d5c787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/index.html.twig"));

        $__internal_8d6240ea29fc6417fce37b6b213fcbf66fad663c09698a88c6a877dff79358ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6240ea29fc6417fce37b6b213fcbf66fad663c09698a88c6a877dff79358ae->enter($__internal_8d6240ea29fc6417fce37b6b213fcbf66fad663c09698a88c6a877dff79358ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/index.html.twig"));

        // line 5
        $context["menu_genre"] = true;
        // line 6
        $context["menu_genre_categorie"] = true;
        // line 7
        $context["menu_genre_categorie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_756165ed688ee4cb10e5c3e63d9b88039ad14f980ed0742a210a9b0213d5c787->leave($__internal_756165ed688ee4cb10e5c3e63d9b88039ad14f980ed0742a210a9b0213d5c787_prof);

        
        $__internal_8d6240ea29fc6417fce37b6b213fcbf66fad663c09698a88c6a877dff79358ae->leave($__internal_8d6240ea29fc6417fce37b6b213fcbf66fad663c09698a88c6a877dff79358ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ccd4ff8c2c9663e53dff738e4d723620c909e0e96b33527468b092c852dde6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccd4ff8c2c9663e53dff738e4d723620c909e0e96b33527468b092c852dde6d->enter($__internal_2ccd4ff8c2c9663e53dff738e4d723620c909e0e96b33527468b092c852dde6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5f9f939e5f458afa7dc6a0a6ce7343d27a48f2cd248bd62816dee6eca6e2b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f9f939e5f458afa7dc6a0a6ce7343d27a48f2cd248bd62816dee6eca6e2b4b->enter($__internal_b5f9f939e5f458afa7dc6a0a6ce7343d27a48f2cd248bd62816dee6eca6e2b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des Genre Categories ";
        
        $__internal_b5f9f939e5f458afa7dc6a0a6ce7343d27a48f2cd248bd62816dee6eca6e2b4b->leave($__internal_b5f9f939e5f458afa7dc6a0a6ce7343d27a48f2cd248bd62816dee6eca6e2b4b_prof);

        
        $__internal_2ccd4ff8c2c9663e53dff738e4d723620c909e0e96b33527468b092c852dde6d->leave($__internal_2ccd4ff8c2c9663e53dff738e4d723620c909e0e96b33527468b092c852dde6d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_159d4ef5b0eb650859e21bbfb44497d2d6ad6c4a8c1c658d1cebdcae3b11a5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159d4ef5b0eb650859e21bbfb44497d2d6ad6c4a8c1c658d1cebdcae3b11a5fc->enter($__internal_159d4ef5b0eb650859e21bbfb44497d2d6ad6c4a8c1c658d1cebdcae3b11a5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78feabc11a6ddf999d9a368b113c61420411d430d8e1e52dbe95ef9320eeab51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78feabc11a6ddf999d9a368b113c61420411d430d8e1e52dbe95ef9320eeab51->enter($__internal_78feabc11a6ddf999d9a368b113c61420411d430d8e1e52dbe95ef9320eeab51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une Genre Categorie
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-genre_categorie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                     <th>Calculable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genre_categories"] ?? $this->getContext($context, "genre_categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre_categorie"]) {
            // line 59
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre_categorie"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre_categorie"], "gcLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo (($this->getAttribute($context["genre_categorie"], "gcIsCalculable", array())) ? ("Oui") : ("Non"));
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_edit", array("id" => $this->getAttribute($context["genre_categorie"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_delete", array("id" => $this->getAttribute($context["genre_categorie"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre_categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </tbody>
                        </table>

                        ";
        // line 81
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_78feabc11a6ddf999d9a368b113c61420411d430d8e1e52dbe95ef9320eeab51->leave($__internal_78feabc11a6ddf999d9a368b113c61420411d430d8e1e52dbe95ef9320eeab51_prof);

        
        $__internal_159d4ef5b0eb650859e21bbfb44497d2d6ad6c4a8c1c658d1cebdcae3b11a5fc->leave($__internal_159d4ef5b0eb650859e21bbfb44497d2d6ad6c4a8c1c658d1cebdcae3b11a5fc_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67c52e7f03bd48bd35f96faf175fb200ea0dfbbf4d08395ac0c6854192ae6d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c52e7f03bd48bd35f96faf175fb200ea0dfbbf4d08395ac0c6854192ae6d89->enter($__internal_67c52e7f03bd48bd35f96faf175fb200ea0dfbbf4d08395ac0c6854192ae6d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e480c835cde9c6d8c79f2060a680cfa35032a52c5f66abdd193df0dd1a14a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e480c835cde9c6d8c79f2060a680cfa35032a52c5f66abdd193df0dd1a14a3a->enter($__internal_6e480c835cde9c6d8c79f2060a680cfa35032a52c5f66abdd193df0dd1a14a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-genre_categorie').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune genre_categorie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_6e480c835cde9c6d8c79f2060a680cfa35032a52c5f66abdd193df0dd1a14a3a->leave($__internal_6e480c835cde9c6d8c79f2060a680cfa35032a52c5f66abdd193df0dd1a14a3a_prof);

        
        $__internal_67c52e7f03bd48bd35f96faf175fb200ea0dfbbf4d08395ac0c6854192ae6d89->leave($__internal_67c52e7f03bd48bd35f96faf175fb200ea0dfbbf4d08395ac0c6854192ae6d89_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreCategorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 95,  241 => 94,  220 => 81,  215 => 77,  203 => 71,  196 => 67,  190 => 64,  186 => 63,  181 => 61,  177 => 59,  173 => 58,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Liste des Genre Categories {% endblock %}

{% set menu_genre                   = true %}
{% set menu_genre_categorie         = true %}
{% set menu_genre_categorie_list    = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('genre_categorie_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une Genre Categorie
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('genre_categorie_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-genre_categorie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                     <th>Calculable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for genre_categorie in genre_categories %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ genre_categorie.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ genre_categorie.gcLibelle }}</td>
                                        <td>{{ genre_categorie.gcIsCalculable? \"Oui\" : \"Non\" }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('genre_categorie_edit', { 'id': genre_categorie.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('genre_categorie_delete', { 'id': genre_categorie.id }) }}\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-genre_categorie').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune genre_categorie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtGenreCategorie/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreCategorie\\index.html.twig");
    }
}
