<?php

/* @Admin/CtMotifTarif/add.html.twig */
class __TwigTemplate_0416e92329156041d5c48a3b077f9e6c6cd2c90ea43259328b86b4e6e8429f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotifTarif/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b80a0264072a9959f79f736b6381fd92bfab53b8e2bebe6f826341838866ae16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80a0264072a9959f79f736b6381fd92bfab53b8e2bebe6f826341838866ae16->enter($__internal_b80a0264072a9959f79f736b6381fd92bfab53b8e2bebe6f826341838866ae16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/add.html.twig"));

        $__internal_3ca78bf4e2c98da00b08bd6b4755c8b804f4ae60400f4d4e6ed8d0a772fa21d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca78bf4e2c98da00b08bd6b4755c8b804f4ae60400f4d4e6ed8d0a772fa21d9->enter($__internal_3ca78bf4e2c98da00b08bd6b4755c8b804f4ae60400f4d4e6ed8d0a772fa21d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 8
        $context["menu_motif_tarif"] = true;
        // line 9
        $context["menu_motif_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80a0264072a9959f79f736b6381fd92bfab53b8e2bebe6f826341838866ae16->leave($__internal_b80a0264072a9959f79f736b6381fd92bfab53b8e2bebe6f826341838866ae16_prof);

        
        $__internal_3ca78bf4e2c98da00b08bd6b4755c8b804f4ae60400f4d4e6ed8d0a772fa21d9->leave($__internal_3ca78bf4e2c98da00b08bd6b4755c8b804f4ae60400f4d4e6ed8d0a772fa21d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bfed6257a59fa76f10d69a361ab9f3c62f0f3f962e22921d7b9d8c8ba4ce042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfed6257a59fa76f10d69a361ab9f3c62f0f3f962e22921d7b9d8c8ba4ce042->enter($__internal_8bfed6257a59fa76f10d69a361ab9f3c62f0f3f962e22921d7b9d8c8ba4ce042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34c312e3de37a1dd50878070eb06ea452e14e510a6cbedf583c2d715d46679d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c312e3de37a1dd50878070eb06ea452e14e510a6cbedf583c2d715d46679d1->enter($__internal_34c312e3de37a1dd50878070eb06ea452e14e510a6cbedf583c2d715d46679d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif motif ";
        
        $__internal_34c312e3de37a1dd50878070eb06ea452e14e510a6cbedf583c2d715d46679d1->leave($__internal_34c312e3de37a1dd50878070eb06ea452e14e510a6cbedf583c2d715d46679d1_prof);

        
        $__internal_8bfed6257a59fa76f10d69a361ab9f3c62f0f3f962e22921d7b9d8c8ba4ce042->leave($__internal_8bfed6257a59fa76f10d69a361ab9f3c62f0f3f962e22921d7b9d8c8ba4ce042_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9b57880ff455c7258f692790a0ea86cc76ad5317e2c99af3672bc231cca22ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b57880ff455c7258f692790a0ea86cc76ad5317e2c99af3672bc231cca22ea->enter($__internal_c9b57880ff455c7258f692790a0ea86cc76ad5317e2c99af3672bc231cca22ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc53884213fafdb1941dda09da3dc94aec966ab28952d567c73191d681226941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc53884213fafdb1941dda09da3dc94aec966ab28952d567c73191d681226941->enter($__internal_cc53884213fafdb1941dda09da3dc94aec966ab28952d567c73191d681226941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctMotif", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfTrfPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cc53884213fafdb1941dda09da3dc94aec966ab28952d567c73191d681226941->leave($__internal_cc53884213fafdb1941dda09da3dc94aec966ab28952d567c73191d681226941_prof);

        
        $__internal_c9b57880ff455c7258f692790a0ea86cc76ad5317e2c99af3672bc231cca22ea->leave($__internal_c9b57880ff455c7258f692790a0ea86cc76ad5317e2c99af3672bc231cca22ea_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotifTarif/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  139 => 38,  131 => 33,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Tarif motif {% endblock %}

{% set menu_motif = true %}
{% set menu_motif_tarif = true %}
{% set menu_motif_tarif_create = true %}

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
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctMotif) }}
                        {{ form_row(form.mtfTrfPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMotifTarif/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotifTarif\\add.html.twig");
    }
}
