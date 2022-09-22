<?php

/* AdminBundle:CtContreVisite:index.html.twig */
class __TwigTemplate_8039d32940d0fb265c3e6ac542947e8be4657e01b8ad1c56913e6038bba578a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtContreVisite:index.html.twig", 1);
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
        $__internal_8b55fcff33aff60ff0fda566c1c20d54573031d803d357477283066361ffd2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b55fcff33aff60ff0fda566c1c20d54573031d803d357477283066361ffd2cf->enter($__internal_8b55fcff33aff60ff0fda566c1c20d54573031d803d357477283066361ffd2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtContreVisite:index.html.twig"));

        $__internal_56a2d5597bd71965c576f03b60df78601557b5d6898b34eedffecd44a09c44fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a2d5597bd71965c576f03b60df78601557b5d6898b34eedffecd44a09c44fc->enter($__internal_56a2d5597bd71965c576f03b60df78601557b5d6898b34eedffecd44a09c44fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtContreVisite:index.html.twig"));

        // line 5
        $context["menu_contre_visite"] = true;
        // line 6
        $context["menu_contre_contre_visite_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b55fcff33aff60ff0fda566c1c20d54573031d803d357477283066361ffd2cf->leave($__internal_8b55fcff33aff60ff0fda566c1c20d54573031d803d357477283066361ffd2cf_prof);

        
        $__internal_56a2d5597bd71965c576f03b60df78601557b5d6898b34eedffecd44a09c44fc->leave($__internal_56a2d5597bd71965c576f03b60df78601557b5d6898b34eedffecd44a09c44fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4251f2820636df80fc7732ac69909a11dd47aa3a5474deb13aa91ae1ce9de84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4251f2820636df80fc7732ac69909a11dd47aa3a5474deb13aa91ae1ce9de84f->enter($__internal_4251f2820636df80fc7732ac69909a11dd47aa3a5474deb13aa91ae1ce9de84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d83a919dc7e48ffca61dbc02a15c87d082756bb74c79a11d38f24a66317fbb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83a919dc7e48ffca61dbc02a15c87d082756bb74c79a11d38f24a66317fbb15->enter($__internal_d83a919dc7e48ffca61dbc02a15c87d082756bb74c79a11d38f24a66317fbb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des contre visites ";
        
        $__internal_d83a919dc7e48ffca61dbc02a15c87d082756bb74c79a11d38f24a66317fbb15->leave($__internal_d83a919dc7e48ffca61dbc02a15c87d082756bb74c79a11d38f24a66317fbb15_prof);

        
        $__internal_4251f2820636df80fc7732ac69909a11dd47aa3a5474deb13aa91ae1ce9de84f->leave($__internal_4251f2820636df80fc7732ac69909a11dd47aa3a5474deb13aa91ae1ce9de84f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ebf4743b38b9f23e38340d51b9f79817dc789221cd855c0766169cb81645a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ebf4743b38b9f23e38340d51b9f79817dc789221cd855c0766169cb81645a0a->enter($__internal_1ebf4743b38b9f23e38340d51b9f79817dc789221cd855c0766169cb81645a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd322a9d0bd4305dd873fbba2bc20d5046019dd679c263c2756c03c91853fb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd322a9d0bd4305dd873fbba2bc20d5046019dd679c263c2756c03c91853fb43->enter($__internal_cd322a9d0bd4305dd873fbba2bc20d5046019dd679c263c2756c03c91853fb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un contre visite technique
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-contre-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Numéro immatriculation carte grise</th>
                                     <th>Date de création</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? $this->getContext($context, "visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            ";
            // line 63
            if ($this->getAttribute($context["visite"], "ctCarteGrise", array())) {
                // line 64
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visite"], "ctCarteGrise", array()), "cgImmatriculation", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 66
            echo "                                        </td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visite"], "vstCreated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_edit", array("id" => $this->getAttribute($context["visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_delete", array("id" => $this->getAttribute($context["visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </tbody>
                        </table>

                        ";
        // line 84
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
        
        $__internal_cd322a9d0bd4305dd873fbba2bc20d5046019dd679c263c2756c03c91853fb43->leave($__internal_cd322a9d0bd4305dd873fbba2bc20d5046019dd679c263c2756c03c91853fb43_prof);

        
        $__internal_1ebf4743b38b9f23e38340d51b9f79817dc789221cd855c0766169cb81645a0a->leave($__internal_1ebf4743b38b9f23e38340d51b9f79817dc789221cd855c0766169cb81645a0a_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc2fc6c841f61fd043dbc5709b7146c14f714e6c411fccba8036acee4ef05c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2fc6c841f61fd043dbc5709b7146c14f714e6c411fccba8036acee4ef05c2f->enter($__internal_dc2fc6c841f61fd043dbc5709b7146c14f714e6c411fccba8036acee4ef05c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6845dfb92c118eccb5baa477ecc931be218340aee8c3fa6605fb3fb961d37ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6845dfb92c118eccb5baa477ecc931be218340aee8c3fa6605fb3fb961d37ab9->enter($__internal_6845dfb92c118eccb5baa477ecc931be218340aee8c3fa6605fb3fb961d37ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-contre-visite').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune contre visite trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_6845dfb92c118eccb5baa477ecc931be218340aee8c3fa6605fb3fb961d37ab9->leave($__internal_6845dfb92c118eccb5baa477ecc931be218340aee8c3fa6605fb3fb961d37ab9_prof);

        
        $__internal_dc2fc6c841f61fd043dbc5709b7146c14f714e6c411fccba8036acee4ef05c2f->leave($__internal_dc2fc6c841f61fd043dbc5709b7146c14f714e6c411fccba8036acee4ef05c2f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtContreVisite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 98,  247 => 97,  226 => 84,  221 => 80,  209 => 74,  202 => 70,  196 => 67,  193 => 66,  187 => 64,  185 => 63,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des contre visites {% endblock %}

{% set menu_contre_visite      = true %}
{% set menu_contre_contre_visite_list = true %}

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
                    <a href=\"{{ path('contre_visite_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un contre visite technique
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('contre_visite_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-contre-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Numéro immatriculation carte grise</th>
                                     <th>Date de création</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for visite in visites %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ visite.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            {% if visite.ctCarteGrise %}
                                                {{ visite.ctCarteGrise.cgImmatriculation }}
                                            {% endif %}
                                        </td>
                                        <td>{{ visite.vstCreated|date('d/m/Y') }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('contre_visite_edit', { 'id': visite.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('contre_visite_delete', { 'id': visite.id }) }}\">
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
            \$('#list-contre-visite').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune contre visite trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtContreVisite:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtContreVisite/index.html.twig");
    }
}
