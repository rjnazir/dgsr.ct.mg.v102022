<?php

/* @Admin/CtZoneDeserte/index.html.twig */
class __TwigTemplate_28e290b9c412e8ee829343793b00b4a7eeb98cdb29a66e206f906fac122d5f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtZoneDeserte/index.html.twig", 1);
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
        $__internal_1de67085919b4f8a22d0a542d7c503321055b0f54c14574f649549661ebe5a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de67085919b4f8a22d0a542d7c503321055b0f54c14574f649549661ebe5a4a->enter($__internal_1de67085919b4f8a22d0a542d7c503321055b0f54c14574f649549661ebe5a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/index.html.twig"));

        $__internal_7b80bc51b2b679b45a7d0afff180d241b87854bb4aa0d59a59d4f85d05446371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b80bc51b2b679b45a7d0afff180d241b87854bb4aa0d59a59d4f85d05446371->enter($__internal_7b80bc51b2b679b45a7d0afff180d241b87854bb4aa0d59a59d4f85d05446371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/index.html.twig"));

        // line 5
        $context["menu_zone_deserte"] = true;
        // line 6
        $context["menu_zone_deserte_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1de67085919b4f8a22d0a542d7c503321055b0f54c14574f649549661ebe5a4a->leave($__internal_1de67085919b4f8a22d0a542d7c503321055b0f54c14574f649549661ebe5a4a_prof);

        
        $__internal_7b80bc51b2b679b45a7d0afff180d241b87854bb4aa0d59a59d4f85d05446371->leave($__internal_7b80bc51b2b679b45a7d0afff180d241b87854bb4aa0d59a59d4f85d05446371_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96a4c80e22390edcd45e8b687effbc543a925047acc9dd1eefa94e70e17243a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a4c80e22390edcd45e8b687effbc543a925047acc9dd1eefa94e70e17243a2->enter($__internal_96a4c80e22390edcd45e8b687effbc543a925047acc9dd1eefa94e70e17243a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95067c7e710acf4eeabeb08828f0ea93eeef3e8f79b66ee4997abe8cfd2311a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95067c7e710acf4eeabeb08828f0ea93eeef3e8f79b66ee4997abe8cfd2311a0->enter($__internal_95067c7e710acf4eeabeb08828f0ea93eeef3e8f79b66ee4997abe8cfd2311a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des zones de déserte ";
        
        $__internal_95067c7e710acf4eeabeb08828f0ea93eeef3e8f79b66ee4997abe8cfd2311a0->leave($__internal_95067c7e710acf4eeabeb08828f0ea93eeef3e8f79b66ee4997abe8cfd2311a0_prof);

        
        $__internal_96a4c80e22390edcd45e8b687effbc543a925047acc9dd1eefa94e70e17243a2->leave($__internal_96a4c80e22390edcd45e8b687effbc543a925047acc9dd1eefa94e70e17243a2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d60abf7837c4daafd226d11ee7c7e824aadf3e88270aed28df136c54f71a1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d60abf7837c4daafd226d11ee7c7e824aadf3e88270aed28df136c54f71a1fc->enter($__internal_4d60abf7837c4daafd226d11ee7c7e824aadf3e88270aed28df136c54f71a1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5889b3bbddb616c2acc94d5b2bc8472ca9f01efdaa18726ec7bafd2e4fb0798a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5889b3bbddb616c2acc94d5b2bc8472ca9f01efdaa18726ec7bafd2e4fb0798a->enter($__internal_5889b3bbddb616c2acc94d5b2bc8472ca9f01efdaa18726ec7bafd2e4fb0798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 30
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une zone de déserte
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-zone_deserte\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zone_desertes"] ?? $this->getContext($context, "zone_desertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_deserte"]) {
            // line 51
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["zone_deserte"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["zone_deserte"], "zdLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_edit", array("id" => $this->getAttribute($context["zone_deserte"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_delete", array("id" => $this->getAttribute($context["zone_deserte"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_deserte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </tbody>
                        </table>

                        ";
        // line 72
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
        
        $__internal_5889b3bbddb616c2acc94d5b2bc8472ca9f01efdaa18726ec7bafd2e4fb0798a->leave($__internal_5889b3bbddb616c2acc94d5b2bc8472ca9f01efdaa18726ec7bafd2e4fb0798a_prof);

        
        $__internal_4d60abf7837c4daafd226d11ee7c7e824aadf3e88270aed28df136c54f71a1fc->leave($__internal_4d60abf7837c4daafd226d11ee7c7e824aadf3e88270aed28df136c54f71a1fc_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b118faa3d1b9e66b75e4504ade46a2f95372cc0c7f3641592bdabb4f8ccdc16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b118faa3d1b9e66b75e4504ade46a2f95372cc0c7f3641592bdabb4f8ccdc16e->enter($__internal_b118faa3d1b9e66b75e4504ade46a2f95372cc0c7f3641592bdabb4f8ccdc16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb5476088578f25106d730f36177fe23437328f4fe5a023104435c22ec987ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5476088578f25106d730f36177fe23437328f4fe5a023104435c22ec987ca0->enter($__internal_fb5476088578f25106d730f36177fe23437328f4fe5a023104435c22ec987ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-zone_deserte').DataTable(
            {
                \"aaSorting\": [],
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
                    \"sEmptyTable\": \"Aucune zone de déserte trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_fb5476088578f25106d730f36177fe23437328f4fe5a023104435c22ec987ca0->leave($__internal_fb5476088578f25106d730f36177fe23437328f4fe5a023104435c22ec987ca0_prof);

        
        $__internal_b118faa3d1b9e66b75e4504ade46a2f95372cc0c7f3641592bdabb4f8ccdc16e->leave($__internal_b118faa3d1b9e66b75e4504ade46a2f95372cc0c7f3641592bdabb4f8ccdc16e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtZoneDeserte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 86,  213 => 85,  192 => 72,  187 => 68,  175 => 62,  168 => 58,  162 => 55,  157 => 53,  153 => 51,  149 => 50,  135 => 39,  124 => 31,  121 => 30,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des zones de déserte {% endblock %}

{% set menu_zone_deserte      = true %}
{% set menu_zone_deserte_list = true %}

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
                    <a href=\"{{ path('zone_deserte_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une zone de déserte
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('zone_deserte_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-zone_deserte\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for zone_deserte in zone_desertes %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ zone_deserte.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ zone_deserte.zdLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('zone_deserte_edit', { 'id': zone_deserte.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('zone_deserte_delete', { 'id': zone_deserte.id }) }}\">
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
            \$('#list-zone_deserte').DataTable(
            {
                \"aaSorting\": [],
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
                    \"sEmptyTable\": \"Aucune zone de déserte trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtZoneDeserte/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtZoneDeserte\\index.html.twig");
    }
}
