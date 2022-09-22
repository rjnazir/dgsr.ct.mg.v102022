<?php

/* @Admin/CtTypeConstatationAvDedouanement/index.html.twig */
class __TwigTemplate_429a8db6fec6f9904e5abdec2efa4153103cfa15a11ba397f908d1d43a96afd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeConstatationAvDedouanement/index.html.twig", 1);
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
        $__internal_7e2ee32b6f556e19aa7267f2e0f589e0f266da36aaf6c4517332c994e1bfa07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2ee32b6f556e19aa7267f2e0f589e0f266da36aaf6c4517332c994e1bfa07f->enter($__internal_7e2ee32b6f556e19aa7267f2e0f589e0f266da36aaf6c4517332c994e1bfa07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/index.html.twig"));

        $__internal_72c8fcc49f855df5be8d81fa37118304a7aa0f4069a520c2e795840bc48abfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c8fcc49f855df5be8d81fa37118304a7aa0f4069a520c2e795840bc48abfd7->enter($__internal_72c8fcc49f855df5be8d81fa37118304a7aa0f4069a520c2e795840bc48abfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/index.html.twig"));

        // line 5
        $context["menu_const_av_ded_type"] = true;
        // line 6
        $context["menu_const_av_ded_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e2ee32b6f556e19aa7267f2e0f589e0f266da36aaf6c4517332c994e1bfa07f->leave($__internal_7e2ee32b6f556e19aa7267f2e0f589e0f266da36aaf6c4517332c994e1bfa07f_prof);

        
        $__internal_72c8fcc49f855df5be8d81fa37118304a7aa0f4069a520c2e795840bc48abfd7->leave($__internal_72c8fcc49f855df5be8d81fa37118304a7aa0f4069a520c2e795840bc48abfd7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff01d195fa658b99cd899db80ab73e422e1de55c4826a4d5eb1bf089f687fda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff01d195fa658b99cd899db80ab73e422e1de55c4826a4d5eb1bf089f687fda4->enter($__internal_ff01d195fa658b99cd899db80ab73e422e1de55c4826a4d5eb1bf089f687fda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a72fe7bec0de24024823ca71467f3ca2a9ba1d4fbad7a156683ed85328bb30f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72fe7bec0de24024823ca71467f3ca2a9ba1d4fbad7a156683ed85328bb30f6->enter($__internal_a72fe7bec0de24024823ca71467f3ca2a9ba1d4fbad7a156683ed85328bb30f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des types de constatations ";
        
        $__internal_a72fe7bec0de24024823ca71467f3ca2a9ba1d4fbad7a156683ed85328bb30f6->leave($__internal_a72fe7bec0de24024823ca71467f3ca2a9ba1d4fbad7a156683ed85328bb30f6_prof);

        
        $__internal_ff01d195fa658b99cd899db80ab73e422e1de55c4826a4d5eb1bf089f687fda4->leave($__internal_ff01d195fa658b99cd899db80ab73e422e1de55c4826a4d5eb1bf089f687fda4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_56ba45a8f3dbb30e3f601794da6981c3e128c161075256824ddcf2a74247b3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ba45a8f3dbb30e3f601794da6981c3e128c161075256824ddcf2a74247b3d8->enter($__internal_56ba45a8f3dbb30e3f601794da6981c3e128c161075256824ddcf2a74247b3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dd632367413302eaf9f03f7c1dde4e01dd33b7e3bf69a2b9cc810ccdfa5bb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd632367413302eaf9f03f7c1dde4e01dd33b7e3bf69a2b9cc810ccdfa5bb2f->enter($__internal_2dd632367413302eaf9f03f7c1dde4e01dd33b7e3bf69a2b9cc810ccdfa5bb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded-type\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["constatations"] ?? $this->getContext($context, "constatations")));
        foreach ($context['_seq'] as $context["_key"] => $context["constatation"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "cadTpLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_edit", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_delete", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constatation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </tbody>
                        </table>

                        ";
        // line 78
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
        
        $__internal_2dd632367413302eaf9f03f7c1dde4e01dd33b7e3bf69a2b9cc810ccdfa5bb2f->leave($__internal_2dd632367413302eaf9f03f7c1dde4e01dd33b7e3bf69a2b9cc810ccdfa5bb2f_prof);

        
        $__internal_56ba45a8f3dbb30e3f601794da6981c3e128c161075256824ddcf2a74247b3d8->leave($__internal_56ba45a8f3dbb30e3f601794da6981c3e128c161075256824ddcf2a74247b3d8_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63671135d07394f108d61fd9433bade66dddbebea8f48a310d8fa4e86b4ae3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63671135d07394f108d61fd9433bade66dddbebea8f48a310d8fa4e86b4ae3a1->enter($__internal_63671135d07394f108d61fd9433bade66dddbebea8f48a310d8fa4e86b4ae3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b6e113cfca31fbca332222479121b1653c39ac539a1deee1a5b9e280f6621378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e113cfca31fbca332222479121b1653c39ac539a1deee1a5b9e280f6621378->enter($__internal_b6e113cfca31fbca332222479121b1653c39ac539a1deee1a5b9e280f6621378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-const-av-ded-type').DataTable(
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
                        \"sEmptyTable\": \"Aucun type de constatation avant dédouanement trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
";
        
        $__internal_b6e113cfca31fbca332222479121b1653c39ac539a1deee1a5b9e280f6621378->leave($__internal_b6e113cfca31fbca332222479121b1653c39ac539a1deee1a5b9e280f6621378_prof);

        
        $__internal_63671135d07394f108d61fd9433bade66dddbebea8f48a310d8fa4e86b4ae3a1->leave($__internal_63671135d07394f108d61fd9433bade66dddbebea8f48a310d8fa4e86b4ae3a1_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeConstatationAvDedouanement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 92,  234 => 91,  213 => 78,  208 => 74,  196 => 68,  189 => 64,  183 => 61,  178 => 59,  174 => 57,  170 => 56,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des types de constatations {% endblock %}

{% set menu_const_av_ded_type      = true %}
{% set menu_const_av_ded_type_list = true %}

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
                    <a href=\"{{ path('type_const_av_ded_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_const_av_ded_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded-type\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for constatation in constatations %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ constatation.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ constatation.cadTpLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('type_const_av_ded_edit', { 'id': constatation.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('type_const_av_ded_delete', { 'id': constatation.id }) }}\">
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
            \$('#list-const-av-ded-type').DataTable(
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
                        \"sEmptyTable\": \"Aucun type de constatation avant dédouanement trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
{% endblock %}
", "@Admin/CtTypeConstatationAvDedouanement/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeConstatationAvDedouanement\\index.html.twig");
    }
}
