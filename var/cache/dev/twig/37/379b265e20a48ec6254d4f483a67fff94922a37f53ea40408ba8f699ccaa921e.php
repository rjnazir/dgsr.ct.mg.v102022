<?php

/* @Admin/CtProvince/index.html.twig */
class __TwigTemplate_deada3c6cb0eaf7993eee2a01baa2f77eace8b5e6aeb14860522e3111e1237d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProvince/index.html.twig", 1);
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
        $__internal_c433344334cfc7a67ec063707c1f4bb123f59173417cc6a1cc03c95537b06de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c433344334cfc7a67ec063707c1f4bb123f59173417cc6a1cc03c95537b06de1->enter($__internal_c433344334cfc7a67ec063707c1f4bb123f59173417cc6a1cc03c95537b06de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/index.html.twig"));

        $__internal_34a63aa0ae2bcd37b18cb9ca9c6ad24d1cf8aee72c8281718a2f80a54b17aab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a63aa0ae2bcd37b18cb9ca9c6ad24d1cf8aee72c8281718a2f80a54b17aab7->enter($__internal_34a63aa0ae2bcd37b18cb9ca9c6ad24d1cf8aee72c8281718a2f80a54b17aab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/index.html.twig"));

        // line 5
        $context["menu_province"] = true;
        // line 6
        $context["menu_province_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c433344334cfc7a67ec063707c1f4bb123f59173417cc6a1cc03c95537b06de1->leave($__internal_c433344334cfc7a67ec063707c1f4bb123f59173417cc6a1cc03c95537b06de1_prof);

        
        $__internal_34a63aa0ae2bcd37b18cb9ca9c6ad24d1cf8aee72c8281718a2f80a54b17aab7->leave($__internal_34a63aa0ae2bcd37b18cb9ca9c6ad24d1cf8aee72c8281718a2f80a54b17aab7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3b25d374f482bbc93f6e83fe641118658b646ce9a4925937f7728b06111f948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b25d374f482bbc93f6e83fe641118658b646ce9a4925937f7728b06111f948->enter($__internal_f3b25d374f482bbc93f6e83fe641118658b646ce9a4925937f7728b06111f948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a537ef0b22aed4babac410d035a7a1114ff2f4f6378f010a1f82767bb54bf0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a537ef0b22aed4babac410d035a7a1114ff2f4f6378f010a1f82767bb54bf0a9->enter($__internal_a537ef0b22aed4babac410d035a7a1114ff2f4f6378f010a1f82767bb54bf0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des provinces ";
        
        $__internal_a537ef0b22aed4babac410d035a7a1114ff2f4f6378f010a1f82767bb54bf0a9->leave($__internal_a537ef0b22aed4babac410d035a7a1114ff2f4f6378f010a1f82767bb54bf0a9_prof);

        
        $__internal_f3b25d374f482bbc93f6e83fe641118658b646ce9a4925937f7728b06111f948->leave($__internal_f3b25d374f482bbc93f6e83fe641118658b646ce9a4925937f7728b06111f948_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_495cbfaffc9cdf64d8b12663e6c8467caab345d4f062292d35ca04a5cce12c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495cbfaffc9cdf64d8b12663e6c8467caab345d4f062292d35ca04a5cce12c16->enter($__internal_495cbfaffc9cdf64d8b12663e6c8467caab345d4f062292d35ca04a5cce12c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07d6b325b6252440dd4e47071b784964a5efccda19474a5fc807d0952f563020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d6b325b6252440dd4e47071b784964a5efccda19474a5fc807d0952f563020->enter($__internal_07d6b325b6252440dd4e47071b784964a5efccda19474a5fc807d0952f563020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un province
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-province\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvCode", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_edit", array("id" => $this->getAttribute($context["province"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_delete", array("id" => $this->getAttribute($context["province"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </tbody>
                        </table>

                        ";
        // line 80
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
        
        $__internal_07d6b325b6252440dd4e47071b784964a5efccda19474a5fc807d0952f563020->leave($__internal_07d6b325b6252440dd4e47071b784964a5efccda19474a5fc807d0952f563020_prof);

        
        $__internal_495cbfaffc9cdf64d8b12663e6c8467caab345d4f062292d35ca04a5cce12c16->leave($__internal_495cbfaffc9cdf64d8b12663e6c8467caab345d4f062292d35ca04a5cce12c16_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8408db7b280fa9d67e223b202c5aa9e9003cc6b3c8c37241bf00796b977f3a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8408db7b280fa9d67e223b202c5aa9e9003cc6b3c8c37241bf00796b977f3a7e->enter($__internal_8408db7b280fa9d67e223b202c5aa9e9003cc6b3c8c37241bf00796b977f3a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1baab23e60a1e70f761a6e85ca1de0ebec83240a35a3f7eeaf03ac0502154bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1baab23e60a1e70f761a6e85ca1de0ebec83240a35a3f7eeaf03ac0502154bb->enter($__internal_c1baab23e60a1e70f761a6e85ca1de0ebec83240a35a3f7eeaf03ac0502154bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-province').DataTable(
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
                    \"sEmptyTable\": \"Aucune province trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_c1baab23e60a1e70f761a6e85ca1de0ebec83240a35a3f7eeaf03ac0502154bb->leave($__internal_c1baab23e60a1e70f761a6e85ca1de0ebec83240a35a3f7eeaf03ac0502154bb_prof);

        
        $__internal_8408db7b280fa9d67e223b202c5aa9e9003cc6b3c8c37241bf00796b977f3a7e->leave($__internal_8408db7b280fa9d67e223b202c5aa9e9003cc6b3c8c37241bf00796b977f3a7e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProvince/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 94,  239 => 93,  218 => 80,  213 => 76,  201 => 70,  194 => 66,  188 => 63,  184 => 62,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des provinces {% endblock %}

{% set menu_province      = true %}
{% set menu_province_list = true %}

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
                    <a href=\"{{ path('province_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un province
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('province_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-province\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for province in provinces %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ province.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ province.prvNom }}</td>
                                        <td>{{ province.prvCode }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('province_edit', { 'id': province.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('province_delete', { 'id': province.id }) }}\">
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
            \$('#list-province').DataTable(
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
                    \"sEmptyTable\": \"Aucune province trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtProvince/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProvince\\index.html.twig");
    }
}
