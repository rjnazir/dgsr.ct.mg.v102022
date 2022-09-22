<?php

/* @Admin/CtConstatationAvDedouanementCarac/index.html.twig */
class __TwigTemplate_736f9c41ef0d52afa47bd5b1cda688111e097f3f3378a1cad23e5891ae57644f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtConstatationAvDedouanementCarac/index.html.twig", 1);
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
        $__internal_8d0b309234aeb54ddc3db52df8efbca3bb1ebcd5da5e745d0257e09067cb80eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0b309234aeb54ddc3db52df8efbca3bb1ebcd5da5e745d0257e09067cb80eb->enter($__internal_8d0b309234aeb54ddc3db52df8efbca3bb1ebcd5da5e745d0257e09067cb80eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanementCarac/index.html.twig"));

        $__internal_e3c3ba22d8d9cac63e8e7821f22b4933303464c54b8fd55e4c33efac79c2c95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c3ba22d8d9cac63e8e7821f22b4933303464c54b8fd55e4c33efac79c2c95b->enter($__internal_e3c3ba22d8d9cac63e8e7821f22b4933303464c54b8fd55e4c33efac79c2c95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanementCarac/index.html.twig"));

        // line 5
        $context["menu_const_av_ded_type"] = true;
        // line 6
        $context["menu_const_av_ded_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0b309234aeb54ddc3db52df8efbca3bb1ebcd5da5e745d0257e09067cb80eb->leave($__internal_8d0b309234aeb54ddc3db52df8efbca3bb1ebcd5da5e745d0257e09067cb80eb_prof);

        
        $__internal_e3c3ba22d8d9cac63e8e7821f22b4933303464c54b8fd55e4c33efac79c2c95b->leave($__internal_e3c3ba22d8d9cac63e8e7821f22b4933303464c54b8fd55e4c33efac79c2c95b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_915ad96aaf1376380c0c78f30e0cc5605245b34f42253e940e9aa8b9f870f323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915ad96aaf1376380c0c78f30e0cc5605245b34f42253e940e9aa8b9f870f323->enter($__internal_915ad96aaf1376380c0c78f30e0cc5605245b34f42253e940e9aa8b9f870f323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea72e192789d766fbfb59e2f295d006be45f9e3dccdf466241a1780926a60aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea72e192789d766fbfb59e2f295d006be45f9e3dccdf466241a1780926a60aa1->enter($__internal_ea72e192789d766fbfb59e2f295d006be45f9e3dccdf466241a1780926a60aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des constatations ";
        
        $__internal_ea72e192789d766fbfb59e2f295d006be45f9e3dccdf466241a1780926a60aa1->leave($__internal_ea72e192789d766fbfb59e2f295d006be45f9e3dccdf466241a1780926a60aa1_prof);

        
        $__internal_915ad96aaf1376380c0c78f30e0cc5605245b34f42253e940e9aa8b9f870f323->leave($__internal_915ad96aaf1376380c0c78f30e0cc5605245b34f42253e940e9aa8b9f870f323_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_36fccc9267fd0bb4e10bf43386f8d4fa75367ffe468d57ceb26f7a26cb352bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36fccc9267fd0bb4e10bf43386f8d4fa75367ffe468d57ceb26f7a26cb352bda->enter($__internal_36fccc9267fd0bb4e10bf43386f8d4fa75367ffe468d57ceb26f7a26cb352bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0916960041849b199a73157b021736c260d3f0931f869bd713ecd7053642fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0916960041849b199a73157b021736c260d3f0931f869bd713ecd7053642fb1->enter($__internal_e0916960041849b199a73157b021736c260d3f0931f869bd713ecd7053642fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo " <br/>
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
                            Créer une constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Provenance</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "cadProvenance", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_edit", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_delete", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
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
        
        $__internal_e0916960041849b199a73157b021736c260d3f0931f869bd713ecd7053642fb1->leave($__internal_e0916960041849b199a73157b021736c260d3f0931f869bd713ecd7053642fb1_prof);

        
        $__internal_36fccc9267fd0bb4e10bf43386f8d4fa75367ffe468d57ceb26f7a26cb352bda->leave($__internal_36fccc9267fd0bb4e10bf43386f8d4fa75367ffe468d57ceb26f7a26cb352bda_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2490a12bf44c740d3508883dbf36f39d760be04113a25bcb780e09bb925207f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2490a12bf44c740d3508883dbf36f39d760be04113a25bcb780e09bb925207f5->enter($__internal_2490a12bf44c740d3508883dbf36f39d760be04113a25bcb780e09bb925207f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8eccd0e03023d2c28524d29578d859db59557efd88fa56945f25d90a4e2c47a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eccd0e03023d2c28524d29578d859db59557efd88fa56945f25d90a4e2c47a6->enter($__internal_8eccd0e03023d2c28524d29578d859db59557efd88fa56945f25d90a4e2c47a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-const-av-ded').DataTable(
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
        
        $__internal_8eccd0e03023d2c28524d29578d859db59557efd88fa56945f25d90a4e2c47a6->leave($__internal_8eccd0e03023d2c28524d29578d859db59557efd88fa56945f25d90a4e2c47a6_prof);

        
        $__internal_2490a12bf44c740d3508883dbf36f39d760be04113a25bcb780e09bb925207f5->leave($__internal_2490a12bf44c740d3508883dbf36f39d760be04113a25bcb780e09bb925207f5_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtConstatationAvDedouanementCarac/index.html.twig";
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

{% block title %}{{ parent() }} Liste des constatations {% endblock %}

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
            {{ messages }} <br/>
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
                            Créer une constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_const_av_ded_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Provenance</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for constatation in constatations %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ constatation.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ constatation.cadProvenance }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('const_av_ded_edit', { 'id': constatation.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('const_av_ded_delete', { 'id': constatation.id }) }}\">
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
            \$('#list-const-av-ded').DataTable(
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
", "@Admin/CtConstatationAvDedouanementCarac/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtConstatationAvDedouanementCarac\\index.html.twig");
    }
}
