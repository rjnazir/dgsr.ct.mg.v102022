<?php

/* @Admin/CtDroitPtac/index.html.twig */
class __TwigTemplate_d92ab9cbf09db8ea84e543e1b533d069ae87166264cbe9b3795ecb2e9655f0e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtDroitPtac/index.html.twig", 1);
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
        $__internal_58dbbf1beead417b8179c07db4ea3e92e92022efe0de54f2b5804f3a4de2feb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58dbbf1beead417b8179c07db4ea3e92e92022efe0de54f2b5804f3a4de2feb6->enter($__internal_58dbbf1beead417b8179c07db4ea3e92e92022efe0de54f2b5804f3a4de2feb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtDroitPtac/index.html.twig"));

        $__internal_843a1d91bf895d7404e8260c3ef6d0acad8f19435a34d18c38d9bcc3bd5f81be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843a1d91bf895d7404e8260c3ef6d0acad8f19435a34d18c38d9bcc3bd5f81be->enter($__internal_843a1d91bf895d7404e8260c3ef6d0acad8f19435a34d18c38d9bcc3bd5f81be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtDroitPtac/index.html.twig"));

        // line 5
        $context["menu_droit_ptac"] = true;
        // line 6
        $context["menu_droit_ptac_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58dbbf1beead417b8179c07db4ea3e92e92022efe0de54f2b5804f3a4de2feb6->leave($__internal_58dbbf1beead417b8179c07db4ea3e92e92022efe0de54f2b5804f3a4de2feb6_prof);

        
        $__internal_843a1d91bf895d7404e8260c3ef6d0acad8f19435a34d18c38d9bcc3bd5f81be->leave($__internal_843a1d91bf895d7404e8260c3ef6d0acad8f19435a34d18c38d9bcc3bd5f81be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cef3478867bfbac4e77e0e05fed6fbcee5ada1dccd08dd5c430c99438dd726d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef3478867bfbac4e77e0e05fed6fbcee5ada1dccd08dd5c430c99438dd726d5->enter($__internal_cef3478867bfbac4e77e0e05fed6fbcee5ada1dccd08dd5c430c99438dd726d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b82c417e532b27b9538430cc9e76ba1d99e9f8143e819a1b9b4e87d64217bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b82c417e532b27b9538430cc9e76ba1d99e9f8143e819a1b9b4e87d64217bff->enter($__internal_1b82c417e532b27b9538430cc9e76ba1d99e9f8143e819a1b9b4e87d64217bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des Droits Ptac ";
        
        $__internal_1b82c417e532b27b9538430cc9e76ba1d99e9f8143e819a1b9b4e87d64217bff->leave($__internal_1b82c417e532b27b9538430cc9e76ba1d99e9f8143e819a1b9b4e87d64217bff_prof);

        
        $__internal_cef3478867bfbac4e77e0e05fed6fbcee5ada1dccd08dd5c430c99438dd726d5->leave($__internal_cef3478867bfbac4e77e0e05fed6fbcee5ada1dccd08dd5c430c99438dd726d5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c345ab8cd87fa1c1d8d9af4afeeb42cce4aec6f87f5565dd85733187e15f9c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c345ab8cd87fa1c1d8d9af4afeeb42cce4aec6f87f5565dd85733187e15f9c42->enter($__internal_c345ab8cd87fa1c1d8d9af4afeeb42cce4aec6f87f5565dd85733187e15f9c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7cee65619fe40b0ead3ccbaa8e443f706276ad3b9f5550bb49135c75c2c77d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cee65619fe40b0ead3ccbaa8e443f706276ad3b9f5550bb49135c75c2c77d3->enter($__internal_e7cee65619fe40b0ead3ccbaa8e443f706276ad3b9f5550bb49135c75c2c77d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un Droit ptac
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-droit_ptac\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Type</th>
                                    <th>Genre</th>
                                     <th>Poids minimum (T)</th>
                                     <th>Poids maximum (T)</th>
                                     <th>Droit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["droit_ptacs"] ?? $this->getContext($context, "droit_ptacs")));
        foreach ($context['_seq'] as $context["_key"] => $context["droit_ptac"]) {
            // line 61
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["droit_ptac"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["droit_ptac"], "ctTypeDroitPtac", array()), "tpDpLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["droit_ptac"], "ctGenreCategorie", array()), "gcLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["droit_ptac"], "dpPrixMin", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["droit_ptac"], "dpPrixMax", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["droit_ptac"], "dpDroit", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_edit", array("id" => $this->getAttribute($context["droit_ptac"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_delete", array("id" => $this->getAttribute($context["droit_ptac"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['droit_ptac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                            </tbody>
                        </table>

                        ";
        // line 86
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
        
        $__internal_e7cee65619fe40b0ead3ccbaa8e443f706276ad3b9f5550bb49135c75c2c77d3->leave($__internal_e7cee65619fe40b0ead3ccbaa8e443f706276ad3b9f5550bb49135c75c2c77d3_prof);

        
        $__internal_c345ab8cd87fa1c1d8d9af4afeeb42cce4aec6f87f5565dd85733187e15f9c42->leave($__internal_c345ab8cd87fa1c1d8d9af4afeeb42cce4aec6f87f5565dd85733187e15f9c42_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5df7285c38aa929ccc9f212174aed873cf356a8ddfb414c25a33b140f8ddfb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df7285c38aa929ccc9f212174aed873cf356a8ddfb414c25a33b140f8ddfb03->enter($__internal_5df7285c38aa929ccc9f212174aed873cf356a8ddfb414c25a33b140f8ddfb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d0a567f0fe5c781f655b8f8b3f688c294ad2d0685b2a38555dd1dd10c722c094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a567f0fe5c781f655b8f8b3f688c294ad2d0685b2a38555dd1dd10c722c094->enter($__internal_d0a567f0fe5c781f655b8f8b3f688c294ad2d0685b2a38555dd1dd10c722c094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-droit_ptac').DataTable(
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
                    \"sEmptyTable\": \"Aucune droit_ptac trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_d0a567f0fe5c781f655b8f8b3f688c294ad2d0685b2a38555dd1dd10c722c094->leave($__internal_d0a567f0fe5c781f655b8f8b3f688c294ad2d0685b2a38555dd1dd10c722c094_prof);

        
        $__internal_5df7285c38aa929ccc9f212174aed873cf356a8ddfb414c25a33b140f8ddfb03->leave($__internal_5df7285c38aa929ccc9f212174aed873cf356a8ddfb414c25a33b140f8ddfb03_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtDroitPtac/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 100,  254 => 99,  233 => 86,  228 => 82,  216 => 76,  209 => 72,  203 => 69,  199 => 68,  195 => 67,  191 => 66,  187 => 65,  182 => 63,  178 => 61,  174 => 60,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des Droits Ptac {% endblock %}

{% set menu_droit_ptac           = true %}
{% set menu_droit_ptac_list      = true %}

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
                    <a href=\"{{ path('droit_ptac_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un Droit ptac
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('droit_ptac_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-droit_ptac\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Type</th>
                                    <th>Genre</th>
                                     <th>Poids minimum (T)</th>
                                     <th>Poids maximum (T)</th>
                                     <th>Droit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for droit_ptac in droit_ptacs %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ droit_ptac.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ droit_ptac.ctTypeDroitPtac.tpDpLibelle }}</td>
                                        <td>{{ droit_ptac.ctGenreCategorie.gcLibelle }}</td>
                                        <td>{{ droit_ptac.dpPrixMin }}</td>
                                        <td>{{ droit_ptac.dpPrixMax }}</td>
                                        <td>{{ droit_ptac.dpDroit }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('droit_ptac_edit', { 'id': droit_ptac.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('droit_ptac_delete', { 'id': droit_ptac.id }) }}\">
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
            \$('#list-droit_ptac').DataTable(
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
                    \"sEmptyTable\": \"Aucune droit_ptac trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtDroitPtac/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtDroitPtac\\index.html.twig");
    }
}
